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

Route::get('/', 'WebAuth@home');
Route::view('/index', 'admin_pages.dashboard');
Route::view('/l', 'admin_pages.auth.login');
Route::view('/r', 'admin_pages.auth.register');


Route::get('/register', 'WebAuth@registerpage');
Route::post('/register', 'WebAuth@register');

Route::get('/login', 'WebAuth@loginpage');

Route::post('/login', [
    'uses'=>'WebAuth@login',
    'as'=>'login.custom'
]);