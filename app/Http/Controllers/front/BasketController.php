<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class BasketController extends Controller
{
    public function index()
    {

        $products = Cart::content();
      //  dd($products);
        return view('front.basket', compact( 'products'));

    }


    public function showProduct()
    {
     $id=request('id');
    // return $id;
        $product = Product::findOrFail($id);
        if (!$product)
            abort(404);

        return view('front.render.product_modal', compact('product'))->render();
    }


    function add()
    {
        $id = request('id');
        $qty = request('qty');
        $product = Product::findOrFail($id);
        if (!$product)
            abort(404);
        Cart::add(['id' => $product->id, 'name' => $product->name, 'qty' => $qty, 'price' =>$product->discountprice ??  $product->price, 'weight' => 1,
                'options' => [
                    'photo' => $product->photo,
                    'size' => 1,
                    'name' => $product->name,
                    'ingredient' => $product->ingredient,
                ]]
        );
//        return Cart::content()->groupBy('id')->count();
        return Cart::count();
    }
    public function update()
    {

        $rowId=request('id');
        $val=request('val');
       // return $rowId;
        $qty=request('qty');
        $cart= Cart::update($rowId, ['qty' => $qty]); // Will update the name

    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back()
            ->with('mesaj', 'Mehsul sebetden cixarildi')
            ->with('type', 'success');
    }

    public function buy(Request $request)
    {
        dd($request);
        $this->validate(request(), [
            'payment' => 'required|email',
            'password' => 'required'
        ]);
    }
}
