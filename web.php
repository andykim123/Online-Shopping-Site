<?php

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

// use App\Item;


// Route::get('/items','ItemsController@index');
// Route::get('/items/{item}','ItemsController@show');

Route::get('/','ItemsController@index');

Route::get('/items/create','ItemsController@create');

Route::post('/items','ItemsController@store');

Route::get('/items/{item}','ItemsController@show');

Route::post('/items/{item}/comments','CommentsController@store');

Route::post('/items/{item}/purchases','PurchasesController@process');

Route::post('/items/{item}/purchases/checkout','PurchasesController@store');

Route::get('/register','RegistrationController@create');

Route::get('/login','SessionsController@create');

//Route::get('/items/purchase','ItemsController@purchase');


// items

// GET /items

// GET /items/create

// POST /items

// GET /items/{id}/edit

// GET /items/{id}

// PATCH /items/{id}

// DELETE /items/{id}

// Route::get('/items', function () {
//     	$items = Item::all();

//     	return view('items.index',compact('items'));


// });

// Route::get('/items/{item}',function($id) {
// 	$item = Item::find($id);
// 	return view('items.show',compact('item'));
// });
