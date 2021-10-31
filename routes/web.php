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

Route::get('/', function(){
    return view('hello');
})->name('home');
// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\AboutController')->name('about');


Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'DashboardController')->name('dashboard');
    // Route::get('users', 'UserController@index')->name('users');
    Route::get('users/blocked', 'UserController@blocked')->name('users.blocked');
    Route::resource('users', 'UserController');
    // trashed
    Route::get('categories/trashed', 'CategoryController@trashed')->name('categories.trashed');
    Route::post('categories/restore/{id}', 'CategoryController@restore')->name('categories.restore');
    Route::delete('categories/force/{id}', 'CategoryController@force')->name('categories.force');
    Route::resource('categories', 'CategoryController');
});

Route::fallback(function(){
    return "Oops... How you'r trapped here? ";
});