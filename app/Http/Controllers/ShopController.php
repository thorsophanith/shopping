<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('shop');
    }

    public function shop_cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function details(){
        return view('cart-detail');
    }

    public function wishlist(){
        return view('wishlist');
    }
}
