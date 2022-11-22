<?php

namespace App\Http\Controllers\Font_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('Font_end.content.index');
    }

    public function shop()
    {
        return view('Font_end.content.shop');
    }

    public function shopdetail()
    {
        return view('Font_end.content.shopdetail');
    }

    public function shoppingcart()
    {
        return view('Font_end.content.shoppingcart');
    }

    public function checkout()
    {
        return view('Font_end.content.checkout');
    }
}
