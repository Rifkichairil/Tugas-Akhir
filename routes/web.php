<?php

use App\Repositories\SearchRepositories;
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

// Route Wireframe
Route::get('/', 'HomeController@index')->name('main.home');
Route::get('/detail/{id}', 'HomeController@detail')->name('main.detail');
Route::get('/invoicepdf/{id}', 'HomeController@invoicepdf')->name('main.invoicepdf');

// Create
Route::get('/create', 'TambahController@create')->name('main.create');
Route::post('/create/store', 'TambahController@store')->name('main.store');


// Route Rating Resep
Route::post('rating/{id}', 'RatingController@storeRating')->name('rating.store');

// Route Searching
Route::get('/search', 'SearchController@elasticsearch')->name('main.search');
Route::get('/exp', 'SearchController@exp')->name('main.exp');


// Route Comment Detail
Route::post('/detail/{id}/comment', 'ReplyController@storeComment')->name('reply.store');

Route::get('/products', function () {
    return \App\Models\ResepMasakan::get();
});

Route::get('/products/{param}', function ($param) {
    return \App\Models\ResepMasakan::search($param)->get();
});
