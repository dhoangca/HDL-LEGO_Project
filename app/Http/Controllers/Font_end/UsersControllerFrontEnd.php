<?php

namespace App\Http\Controllers\Font_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Font_end\UsersModel;

class UsersControllerFrontEnd extends Controller
{
    public function shoppingcart()
    {
        return view('Font_end.content.shoppingcart');
    }

    public function checkout()
    {
        return view('Font_end.content.checkout');
    }
}
