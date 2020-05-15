<?php

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
    Route::post('products', 'ProductsController@create')->middleware('can:create,App\Product');
    Route::delete('products/{id}', 'ProductsController@destroy')->middleware('can:delete,product');
    Route::post('orders', 'OrdersController@store')->middleware('can:create,App\Order');
    Route::get('/products/{id}/reviews', 'ProductRewiewsController@index')->middleware('can:viewProductReviews');
    Route::post('/products/{id}/reviews', 'ProductRewiewsController@store')->middleware('can:createReviewForProduct');
});
