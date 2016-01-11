<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/ps', function () {
    return view('ps/index');
});

Route::get('/maths', function () {
    return view('maths/index');
});
Route::get('/maths/spearmans-rank', function () {
    return view('maths/spearmans_rank');
});
Route::get('/maths/decimal-search', function () {
    return view('maths/decimal_search');
});
Route::get('/maths/newtons-method', function () {
    return view('maths/newtons_method');
});
Route::get('/maths/fixed-point', function () {
    return view('maths/fixed_point');
});

Route::post('/ps/results', 'PSController@result')->name('ps');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
