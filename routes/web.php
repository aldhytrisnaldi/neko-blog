<?php

Auth::routes([
    'register'  => false
]);

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// CATEGORY
Route::resource('category', 'CategoryController');

// PROMOTION
Route::resource('promotion', 'PromotionController');
Route::resource('promosi', 'PromosiController');
Route::get('promosi/{promosi}', 'PromosiController@promosi');

// ARTICLE
Route::resource('article', 'ArticleController');
Route::resource('artikel', 'ArtikelController');
Route::get('artikel/{artikel}', 'ArtikelController@artikel');

//
Route::resource('doctor', 'DoctorController');

// USER
Route::resource('user', 'UserController');

// ROLE
Route::resource('role', 'RoleController');

// HOME
Route::get('/', 'HomeController@index')->name('home');

