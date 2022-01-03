<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () { 
    // public
    Route::post('login', [App\Http\Controllers\AuthController::class,'login']);
    Route::post('register',[App\Http\Controllers\AuthController::class,'register']);

    Route::get('categories',[App\Http\Controllers\CategoryController::class,'index']);
    Route::get('categories/random/{count}', [App\Http\Controllers\CategoryController::class,'random']);
    Route::get('categories/slug/{slug}',[App\Http\Controllers\CategoryController::class,'slug']);

    Route::get('books', [App\Http\Controllers\BookController::class,'index']);
    Route::get('books/top/{count}', [App\Http\Controllers\BookController::class,'top']);
    Route::get('books/slug/{slug}', [App\Http\Controllers\BookController::class,'slug']);
    Route::get('books/search/{keyword}', [App\Http\Controllers\BookController::class,'search']);

    Route::post('books/cart',[App\Http\Controllers\BookController::class,'cart'] );

    Route::get('provinces',[App\Http\Controllers\ShopController::class,'provinces']);
    Route::get('cities', [App\Http\Controllers\ShopController::class,'cities']);
    Route::get('couriers', [App\Http\Controllers\ShopController::class,'couriers']);
    // auth
    Route::middleware(['auth:api'])->group(function () {
        Route::post('logout', [App\Http\Controllers\AuthController::class,'logout']);
        Route::post('shipping',[App\Http\Controllers\ShopController::class,'shipping'] );
        Route::post('services',[App\Http\Controllers\ShopController::class,'services'] );
        Route::post('payment',[App\Http\Controllers\ShopController::class,'payment'] );
        Route::get('my-order', [App\Http\Controllers\ShopController::class,'myOrder']);
        //...
    }); 
    
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});
