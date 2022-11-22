<?php

namespace App\Http\Controllers\Font_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Font_end\LoginAndRegisterModel;
// use Auth;
use Illuminate\Support\Facades\Auth;

class LoginAndRegisterController extends Controller
{
    //login
    public function getLogin()
    {
        return view('Font_end.content.login');
    }

    public function postLogin(Request $request)
    {
        $arr = ['uUsername' => $request->uUsername, 'uPassword' => $request->uPasswords];
        dd('$arr');
        if (Auth::attempt($arr)) 
        {
            return redirect()->route('clients.index')->with('message','thanh cong');
        }else
        {
            // return redirect()->route('clients.login')->with('message','that bai');
            dd('that bai');
        }

        // if (Auth::attempt(['uUsername' => $request->uUsername, 'uPassword' => $request->uPassword])) 
        // {
        //     if (Auth::user()->role == 1) 
        //     {
        //         dd('thành công');
        //         return view('Font_end.content.index');
        //     }
        //     else
        //     {
        //         dd('thành công');
        //         return view('Back_end.content.index');
        //     }
            

        // }
        // else
        // {
        //     Auth::logout();
        //     return redirect()->back()->with('message','tài khoản chưa tồn tại');
        // }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('clients.login');
    }

    // register
    public function getRegister()
    {
        return view('Font_end.content.register');
    }

    public function postRegister(Request $request)
    {

        $users = new LoginAndRegisterModel;

        $users->uName = $request->uName;

        $users->uUsername = $request->uUsername;

        $users->uPassword = $request->uPassword;

        $users->uEmail = $request->uEmail;

        $users->uPhoneNumber = $request->uPhoneNumber;

        $users->Address = $request->Address;

        $users->save();

        return redirect()->route('clients.login');

    }
    
}
