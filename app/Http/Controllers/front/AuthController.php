<?php

namespace App\Http\Controllers\front;


use App\Http\Controllers\Controller;
use App\Mail\UserConfirmedMail;
use App\Models\UserLocations;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Socialite;

//use App\Models\User;

class AuthController extends Controller
{

    public function login_form()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('front.auth.login');
    }

    public function register_form()
    {
        return view('front.auth.register');
    }

    public function login()
    {

        if (Auth::check()) {
            return redirect()->route('home');
        }

        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = [
            'email' => request('email'),
            'password' => request('password'),
            'is_active' => 1
        ];

        if (Auth::guard('web')->attempt($data, request()->has('rememberme'))) {
            request()->session()->regenerate();//bununla requestin session bilgilerini yeniliyirik
            return redirect()->back();
        }

        else {
            $errors = ['email' => 'Xetalı giriş'];
            return back()->withErrors($errors);
        }
    }

    public function register(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required|min:5|max:55',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:5|max:13',
            'location' => 'required',
            'street' => 'required',
            'home' => 'required',
            'content' => 'required',
            'password' => 'required|confirmed|min:5|max:15'
        ]);
        DB::transaction(function () {

            $user = User::create([

                'fullname' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'activation' => Str::random(55),
                'is_active' => 0
            ]);

            $userlocations = UserLocations::create([
                'street' => request('street'),
                'location' => request('location'),
                'home' => request('home'),
                'content' => request('content'),
                'is_main' => 1,
                'user_id' => $user->id,
            ]);

            Mail::to(request('email'))->send(new UserConfirmedMail($user));


            return redirect(route('login'));
        });


        return redirect()->route('register')
            ->with('mesaj', 'Mailinizi testiq edin')
            ->with('type', 'success');

    }

    public function activation($activation)
    {

        $user = User::where('activation', $activation)->first();
        if (!is_null($user)) {
            $user->activation = null;
            $user->is_active = 1;
            $user->save();
            //auth()->login($user);
            return redirect()
                ->route('login')
                ->with('mesaj', 'Qeydiyyatiniz aktivlewdirildi')//with redirect ile yonlendirdiymiz sehifeye flash session deyerler gondermeye xidmet edir
                ->with('type', 'success');
        } else {
            return redirect()
                ->to('/')
                ->with('mesaj', 'Qeydiyyatiniz aktivlewdirilmedi')//with redirect ile yonlendirdiymiz sehifeye flash session deyerler gondermeye xidmet edir
                ->with('type', 'danger');
        }
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('home');
    }


    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        //  dd($user);


        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();

            if ($user->email == '') {
                $email = 'facebook';
            } else {
                $email = $user->email;
            }


            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create(['name' => $user->name, 'email' => $email, 'facebook_id' => $user->id]);
                Auth::login($newUser);
                return redirect()->back();
            }
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }


    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        //  dd($user);


        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($user->email == '') {
                $email = 'google';
            } else {
                $email = $user->email;
            }


            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create(['name' => $user->name, 'email' => $email, 'google_id' => $user->id]);
                Auth::login($newUser);
                return redirect()->back();
            }
        } catch (Exception $e) {
            return redirect('auth/google');
        }
    }


}
