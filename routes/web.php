<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

// Route::get('/', function(){
//     return view('welcome');
// })->name('welcome');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');

Route::get('/cart/item/{id}/remove', 'App\Http\Controllers\CartController@destroy')->name('cart.item.remove');

Route::post('/product/add/add/cart', 'App\Http\Controllers\HomeController@addToCart')->name('product.add.to.cart');

Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout.index');

Route::get('/api/products', 'App\Http\Controllers\HomeController@products');
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
    Route::resource('products', 'ProductController');
    Route::resource('brands', 'BrandController');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');

Route::fallback(function(){
    return "Oops... How you'r trapped here? ";
});