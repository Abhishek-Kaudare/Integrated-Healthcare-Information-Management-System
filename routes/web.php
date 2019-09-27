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
Route::group(['middleware' => 'web'], function () {
Auth::routes();
Route::auth();
Route::get('/',[
    'uses' => 'WebAuth@home',
    'as' => 'home',
    'middleware' => 'guest'
]);

Route::view('/index', 'admin_pages.dashboard');
// Route::view('/l', 'admin_pages.auth.login');
// Route::view('/r', 'admin_pages.auth.register');

Route::get('/register',[
    'uses' => 'WebAuth@registerpage',
    'as' => 'register',
    'middleware' => 'guest'
]);

Route::post('/register', 'WebAuth@register');


Route::get('/login', [
    'uses'=>'WebAuth@loginpage',
    'as'=>'login'
]);
Route::post('/login', [
    'uses'=>'WebAuth@login',
    'as'=>'login.custom'
]);



Route::get('/hospital', [
    'uses'=>'Hospital@index',
    'as'=>'hospital.index'
]);


});