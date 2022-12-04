<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Font_end\ClientController;
use App\Http\Controllers\Back_end\AdminController;
use App\Http\Controllers\Back_end\CategoryController;
use App\Http\Controllers\Back_end\UsersController;
use App\Http\Controllers\Font_end\LoginAndRegisterController;
use App\Http\Controllers\Back_end\ProductController;
use App\Http\Controllers\Font_end\UsersControllerFrontEnd;
use App\Http\Controllers\Font_end\CartController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// start route font-end
Route::prefix('client')->name('clients.')->group(function()
{
    // route các trang contents front end
    Route::group(['prefix' =>'contents'], function()
    {
        Route::get('/',[ClientController::class,'index'])->name('index');

        Route::get('shops',[ClientController::class,'shop'])->name('shop');

        Route::get('shopdetail/{id}',[ClientController::class,'shopdetail'])->name('shopdetail');

        Route::get('shoppingcart',[UsersControllerFrontEnd::class,'shoppingcart'])->name('shoppingcart');

        Route::get('shopcheckout',[UsersControllerFrontEnd::class,'checkout'])->name('checkout');

        Route::get('search',[ClientController::class,'search'])->name('search');
    });

    // route login and register
    Route::group(['prefix' =>'sign'], function()
    {
        Route::get('login/',[LoginAndRegisterController::class,'getLogin'])->name('login');
            
        Route::post('login/',[LoginAndRegisterController::class,'postLogin'])->name('postLogin');

        Route::get('register/',[LoginAndRegisterController::class,'getRegister'])->name('register');

        Route::post('register/',[LoginAndRegisterController::class,'postRegister']);
            
    });

    // route add to cart
    Route::group(['prefix' =>'cart'], function()
    {
        Route::get('ShoppingCart/',[CartController::class,'cart'])->name('cart');
            
        Route::get('add-to-cart/{id}',[CartController::class,'addtocart'])->name('addtocart');

        Route::post('/update-cart/{id}',[CartController::class,'updatecart'])->name('updatecart');

        Route::delete('deletecart/{id}',[CartController::class,'delete']);
            
    });
});

// end route font-end

// start route back-end

// route content
Route::prefix('admin')->name('admin.')->group(function()
{
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('Dashboard');

    // group route của category
    Route::group(['prefix' =>'category'], function()
    {
        // route của trang quản lý category
        Route::get('/indextablecategory',[CategoryController::class,'indextablecategory'])->name('indextablecategory');
        // route của trang bảng category
        Route::get('/tablecategory',[CategoryController::class,'tablecategory'])->name('tablecategory');
            
        Route::get('create/',[CategoryController::class,'getCreate'])->name('create');
            
        Route::post('create/',[CategoryController::class,'postCreate']);
            
        Route::get('edit/{id}',[CategoryController::class,'getEditCate']);

        Route::post('edit/{id}',[CategoryController::class,'postEditCate']);
            
        Route::get('delete/{id}',[CategoryController::class,'delete']);      
    });

    // group route của users
    Route::group(['prefix' =>'users'], function()
    {
        // route của trang quản lý users
        Route::get('/manageusers',[UsersController::class,'manageusers'])->name('manageusers');
        // route của trang bảng users
        Route::get('/tableusers',[UsersController::class,'tableusers'])->name('tableusers');
            
        Route::get('create/',[UsersController::class,'getCreate'])->name('create');
            
        Route::post('create/',[UsersController::class,'postCreate']);
            
        Route::get('edit/{id}',[UsersController::class,'getEditCate']);

        Route::post('edit/{id}',[UsersController::class,'postEditCate']);
            
        Route::get('delete/{id}',[UsersController::class,'delete']);      
    });

    // route của trang quản lý sản phẩm
    Route::group(['prefix' =>'product'], function()
    {
        // route của trang quản lý sản phẩm
        Route::get('/manageproduct',[ProductController::class,'manageproduct'])->name('manageproduct');
        // route của trang bảng sản phẩm
        Route::get('/tableproduct',[ProductController::class,'tableproduct'])->name('tableproduct');
            
        Route::get('create/',[ProductController::class,'getCreate'])->name('create');
            
        Route::post('create/',[ProductController::class,'postCreate']);
            
        Route::get('edit/{id}',[ProductController::class,'getEditCate']);

        Route::post('edit/{id}',[ProductController::class,'postEditCate']);
            
        Route::get('delete/{id}',[ProductController::class,'delete']);      
    });
});

// end route back-end
