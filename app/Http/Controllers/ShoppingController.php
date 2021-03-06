<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class ShoppingController extends Controller
{
    public function addToCart()
    {
        // dd(request()->all());

        $pdt = Product::find(request()->pdt_id);

        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price
        ]);
        Cart::associate($cartItem->rowId, 'App\Product');
        // dd(Cart::content());
        return redirect()->route('cart');
    }

    public function cart()
    {
        // Cart::destroy();
        return view('ecom.cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function incr($id, $qty)
    {
        Cart::update($id, $qty + 1);
        return redirect()->back();
    }
    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);
        return redirect()->back();
    }

    public function rapid_add($id)
    {
        $pdt = Product::find($id);

        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => 1,
            'price' => $pdt->price
        ]);
        Cart::associate($cartItem->rowId, 'App\Product');
        // dd(Cart::content());
        return redirect()->route('cart');
    }
}
