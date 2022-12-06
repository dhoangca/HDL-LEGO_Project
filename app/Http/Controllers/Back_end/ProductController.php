<?php

namespace App\Http\Controllers\Back_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back_end\ProductModel;
use DB;

class ProductController extends Controller
{
    public function manageproduct()
    {

        $products=ProductModel::all();

        // trả về view của trang quản lý category

        return view('Back_end.content.manageproduct', compact("products"));

    }

    public function tableproduct()
    {

        $products=ProductModel::all();

        // trả về view của trang bảng category

        return view('Back_end.content.tableproduct', compact("products"));

    }

    public function getCreate()
    {
        // $countries = ProductModel::all();

        // $categories = ProductModel::all();

        $countries = DB::table('country')->get();

        $categories = DB::table('category')->get();

        return view('Back_end.content.createProduct', compact("countries", "categories"));

    }

    //Hàm store để thêm dữ liệu

    public function postCreate(Request $request)
    {

        $product = new ProductModel;

        $product->pName = $request->pName;

        $product->pDescription = $request->pDescription;

        $product->pImage = $request->pImage;

        $product->pPrice = $request->pPrice;

        $product->pPricePro = $request->pPricePro;

        $product->pQuantity = $request->pQuantity;
        
        $product->FeaturedRecent = $request->FeaturedRecent;

        $product->cID = $request->cID;

        $product->save();

        return redirect()->route('admin.manageproduct');

    }

    public function getEditCate($pID)
    {

        $data['cate'] = ProductModel::find($pID);
        
        $countries = DB::table('country')->get();

        $categories = DB::table('category')->get();

        return view('Back_end.content.editProduct',$data, compact("countries", "categories"));

    }

    public function postEditCate(Request $request,$pID)
    {

        $product = ProductModel::find($pID);

        $product->pName = $request->pName;

        $product->pDescription = $request->pDescription;

        $product->pImage = $request->pImage;

        $product->pPrice = $request->pPrice;

        $product->pPricePro = $request->pPricePro;

        $product->pQuantity = $request->pQuantity;

        $product->cID = $request->cID;
    
        $product->save();

        return redirect()->route('admin.manageproduct');

    }

    public function delete($pID)
    {

        $product = ProductModel::find($pID);

        $product->delete();

        return back();
    } 
}
