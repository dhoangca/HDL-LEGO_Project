<?php

namespace App\Http\Controllers\Back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back_end\UsersModle;

class UsersController extends Controller
{
    public function manageusers()
    {

        $userrs=UsersModle::all();

        // trả về view của trang quản lý category

        return view('Back_end.content.manageusers', compact("userrs"));

    }

    public function tableusers()
    {

        $userrs=UsersModle::all();

        // trả về view của trang bảng category

        return view('Back_end.content.tableusers', compact("userrs"));

    }

    public function getCreate()
    {

        return view('Back_end.content.createUsers');

    }

    //Hàm store để thêm dữ liệu

    public function postCreate(Request $request)
    {

        $users = new UsersModle;

        $users->uName = $request->uName;

        $users->uUsername = $request->uUsername;

        $users->uPassword = $request->uPassword;

        $users->uEmail = $request->uEmail;

        $users->uPhoneNumber = $request->uPhoneNumber;

        $users->Address = $request->Address;

        $users->save();

        return redirect()->route('admin.manageusers');

    }

    public function getEditCate($uID)
    {

        $data['cate'] = UsersModle::find($uID);

        return view('Back_end.content.editUsers',$data);

    }

    public function postEditCate(Request $request,$uID)
    {

        $users = UsersModle::find($uID);

        $users->uName = $request->uName;

        $users->uUsername = $request->uUsername;

        $users->uPassword = $request->uPassword;

        $users->uEmail = $request->uEmail;

        $users->uPhoneNumber = $request->uPhoneNumber;

        $users->Address = $request->Address;

        $users->save();

        return redirect()->route('admin.manageusers');

    }

    public function delete($id)
    {

        $category = UsersModle::find($id);

        $category->delete();

        return back();
    }
}
