<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/hel', '/contact', 307);

Route::get('/contact', function () {
    return view('welcome');
})->name('contact');


Route::get('/hello', function () {
    $name = 'Mary Ann';
    return view('hello', compact('name'));
})->name('welcome');

// Route::get('/hel', 'App\Http\Controllers\HelloController@index')->name('hello');

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\AboutController')->name('about');


Route::group(['prefix' => 'admin', 'name'=>'admin', 'namespace'=>'App\Http\Controllers\Admin'], function(){
    Route::get('/', 'DashboardController')->name('dashboard');
    // Route::get('users', 'UserController@index')->name('users');
    Route::get('users/blocked', 'UserController@blocked')->name('users.blocked');
    Route::resource('users', 'UserController@index');
});

Route::fallback(function(){
    return "Oops... How you'r trapped here? ";
});