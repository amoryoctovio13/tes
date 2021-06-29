<?php
 
use Illuminate\Support\Facades\Route; 
 
Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');

    //root untuk user profile
Route::get('/profile', function () {
        return view('page.profile');
    })->name('profile');
 
Route::put('/profile/update/{$id}', 'ProfileController@update');
});