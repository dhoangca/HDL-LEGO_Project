<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Font_end\ClientController;
use App\Http\Controllers\Back_end\AdminController;
use App\Http\Controllers\Back_end\CategoryController;
use App\Http\Controllers\Back_end\UsersController;
use App\Http\Controllers\Font_end\LoginAndRegisterController;

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

        Route::get('shopdetail',[ClientController::class,'shopdetail'])->name('shopdetail');

        Route::get('shoppingcart',[ClientController::class,'shoppingcart'])->name('shoppingcart');

        Route::get('shopcheckout',[ClientController::class,'checkout'])->name('checkout');
    });

    // route login and register
    Route::group(['prefix' =>'sign'], function()
    {
        Route::get('login/',[LoginAndRegisterController::class, 'getLogin'])->name('login');
            
        Route::post('login/',[LoginAndRegisterController::class, 'postLogin']);

        Route::get('register/',[LoginAndRegisterController::class, 'getRegister'])->name('register');

        Route::post('register/',[LoginAndRegisterController::class, 'postRegister']);
            
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
        // route của trang quản lý category
        Route::get('/manageusers',[UsersController::class,'manageusers'])->name('manageusers');
        // route của trang bảng category
        Route::get('/tableusers',[UsersController::class,'tableusers'])->name('tableusers');
            
        Route::get('create/',[UsersController::class,'getCreate'])->name('create');
            
        Route::post('create/',[UsersController::class,'postCreate']);
            
        Route::get('edit/{id}',[UsersController::class,'getEditCate']);

        Route::post('edit/{id}',[UsersController::class,'postEditCate']);
            
        Route::get('delete/{id}',[UsersController::class,'delete']);      
    });

    
});

<<<<<<< HEAD

// end route back-end
=======
Route::get('shopcheckout', [ClientController::class, 'checkout'])->name('checkout');
// end route back-end
>>>>>>> 193e32db5702bd6af6c34f84ec0aba481d89ecf4
