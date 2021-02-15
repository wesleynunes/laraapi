<?php

// use Illuminate\Http\Request;


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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




// $this->get('categories', 'Api\CategoryController@index');

// $this->get('categories','Api\CategoryController@index');

// Route::get('categories','Api\CategoryController@index');
// Route::post('categories','Api\CategoryController@store');
// Route::put('categories/{id}','Api\CategoryController@update');
// Route::delete('categories/{id}','Api\CategoryController@delete');

Route::apiResource('products', 'Api\ProductController'); 
Route::apiResource('categories', 'Api\CategoryController');


