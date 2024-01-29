<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'api', 'namespace' => 'API'], function()
{   
    Route::group(['prefix' => 'auth'], function(){
        Route::post('/register', 'AuthController@register');
        Route::post('/login', 'AuthController@login');
    });

    Route::get('/getProduct',  'ProductController@getProductList');
    Route::get('/getProductDetail/{id}',  'ProductController@getProductDetail');
    Route::post('/addProduct',  'ProductController@addProduct');
    Route::post('/removeProduct', 'ProductController@removeProduct');
    Route::post('/updateProduct', 'ProductController@updateStatus');
    Route::get('/getCategoryProduct/{category_id}', 'ProductCOntroller@getProductInCategory');

    Route::get('/getOrder', 'OrderController@getOrderList');

    Route::get('/getCart/{user_id}', 'CartController@getCart');

    Route::get('/getCategory', 'CategoryController@getCategory');
});
