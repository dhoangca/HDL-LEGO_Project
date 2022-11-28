<?php

namespace App\Http\Controllers\Font_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Font_end\LoginAndRegisterModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class LoginAndRegisterController extends Controller
{
    //login
    public function getLogin()
    {
        return view('Font_end.content.login');
    }

    public function postLogin(Request $request)
    {
        $uUsername['info'] = $request->uUsername;
        $uPassword = $request->uPassword;

        $result = DB::table('users')->WHERE('uUsername', $uUsername)->get()->toArray();
        
        foreach ($result as $value) {
            # code...
        }

        if ($value->uPassword == $uPassword) 
        {
            return redirect()->route('clients.index', $uUsername)->with('message','thanh cong');
        }else {
            echo 'đăng nhập thất bại';
        }

        // $arr = ['uUsername' => $request->uUsername, 'uPassword' => $request->uPassword];
        // if (Auth::attempt($arr)) 
        // {
        //     dd('thanh cong');
        //     return redirect()->route('clients.index')->with('message','thanh cong');
        // }else
        // {
        //     return redirect()->route('clients.login')->with('message','that bai');
        //     dd('that bai');
        // }

        // if (Auth::attempt(['uUsername' => $request->uUsername, 'uPassword' => $request->uPassword])) 
        // {
        //     if (Auth::user()->role == 1) 
        //     {
        //         dd('thành công');
        //         return view('Font_end.content.index');
        //     }
        //     else
        //     {
        //         dd('thất bại');
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
