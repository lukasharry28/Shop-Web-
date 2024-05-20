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

// Route::get('/', function () {
//     return view('welcome');
// });


//Main Roti Project
Route::get('/Dashboard', "PageController@dashboard");
Route::get('/Produk', "PageController@produk");
Route::get('/Keranjang', "PageController@keranjang");
Route::get('/Delivery', "PageController@delivery");
Route::get('/Profile', "PageController@profile");
Route::get('/Roti_Royale', "PageController@rotiroyale");
Route::get('/Roti_Royale/form-add-roti', "PageController@formaddrotiroyale");
Route::get('/Save_Roti', "PageController@saveroti");


//Main Roti Uji
Route::get('/', "PageController@home");
Route::get('/Roti', "PageController@roti");
Route::get('/Messages', "PageController@messages");
Route::get('/Settings', "PageController@settings");

//Main Movies Uji
Route::get('/Movies', "PageController@movies");
Route::get('/Movies/form-add', "PageController@formaddmovies");
Route::post('/Save', "PageController@savemovies");
