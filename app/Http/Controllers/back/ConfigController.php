<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Image;
use App\Models\Config;
use File;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $crumbs = [
            'Parametrlər' => route('admin.config')
        ];
        $title = 'Parametrlər';
        $config = Config::first();
        return view('back.config', compact('title', 'crumbs', 'config'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => 'mimes:jpeg,jpg,webp,png|max:450',
        ]);

        $config = Config::first();
        $oldLogo = $config->logo;



        $config->update($request->all());


        if (request()->hasFile('logo')) {
            $logo = request()->file('logo');
            $logoFile = time() . '.' . $logo->extension();
            $path = '/uploads/photo/';
            request()->file('logo')->move(public_path($path), $logoFile);
            $image = new Image();
            $image->removeImage($path . $oldLogo);
            $config->logo = $logoFile;
            $config->save();
        }

        return redirect()
            ->route('admin.config')
            ->with('type', 'success')
            ->with('mesaj', 'Dəyişikliklər yerinə yetirildi');
    }
}
