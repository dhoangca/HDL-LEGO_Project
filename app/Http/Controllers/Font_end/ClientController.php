<?php

namespace App\Http\Controllers\Font_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Font_end\ProductModel;

class ClientController extends Controller
{
    public function index()
    {
        $FeaturedRecent1 = ProductModel::WHERE('FeaturedRecent',1)->get();

        $FeaturedRecent0 = ProductModel::WHERE('FeaturedRecent',0)->get();

        return view('Font_end.content.index', compact('FeaturedRecent1','FeaturedRecent0'));
    }

    public function shop()
    {
        $FeaturedRecent1 = ProductModel::WHERE('FeaturedRecent',1)->get();

        return view('Font_end.content.shop', compact('FeaturedRecent1'));
    }

    public function shopdetail(Request $request)
    {
        $ProductDetail = ProductModel::WHERE('pID',$request->id)->first();

        $FeaturedRecent1 = ProductModel::WHERE('FeaturedRecent',1)->get();

        return view('Font_end.content.shopdetail', compact('FeaturedRecent1','ProductDetail'));
    }

    public function search(Request $request)
    {
        $ProductSearch = ProductModel::WHERE('pName','like','%'.$request->key.'%')
                                        ->orWhere('pPrice',$request->key)
                                        ->get();

        return view('Font_end.content.search', compact('ProductSearch'));
    }
}
