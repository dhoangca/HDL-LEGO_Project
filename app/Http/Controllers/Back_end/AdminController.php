<?php

namespace App\Http\Controllers\Back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back_end\UsersModle;


class AdminController extends Controller
{
    public function index()
    {
        return view('Back_end.content.index');
    }

    public function dashboard()
    {
        return view('Back_end.content.Dashboard');
    }
}
