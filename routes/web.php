<?php

Auth::routes([
    'register'  => false
]);

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//
Route::resource('category', 'CategoryController');

// USER
Route::resource('user', 'UserController');

// ROLE
Route::resource('role', 'RoleController');

// HOME
Route::get('/home', 'HomeController@index')->name('home');
