<?php

namespace App\Http\Controllers\Back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back_end\CategoryModel;

class CategoryController extends Controller
{
    public function indextablecategory()
    {

        $categories=CategoryModel::all();

        // trả về view của trang quản lý category

        return view('Back_end.content.managecategory', compact("categories"));

    }

    public function tablecategory()
    {

        $categories=CategoryModel::all();

        // trả về view của trang bảng category

        return view('Back_end.content.tablecategory', compact("categories"));

    }

    public function getCreate()
    {

        return view('Back_end.content.createCategory');

    }

    //Hàm store để thêm dữ liệu

    public function postCreate(Request $request)
    {

        $category = new CategoryModel;

        $category->CategoryName = $request->CategoryName;

        $category->CategoryDescription = $request->CategoryDescription;

        $category->save();

        return redirect()->route('admin.indextablecategory');

    }

    public function getEditCate($CategoryID)
    {

        $data['cate'] = CategoryModel::find($CategoryID);

        return view('Back_end.content.editCategory',$data);

    }

    public function postEditCate(Request $request,$CategoryID)
    {

        $category = CategoryModel::find($CategoryID);

        $category->CategoryName = $request->CategoryName;

        $category->CategoryDescription = $request->CategoryDescription;

        $category->save();

        return redirect()->route('admin.indextablecategory');

    }

    public function delete($id)
    {

        $category = CategoryModel::find($id);

        $category->delete();

        return back();
    }
}
