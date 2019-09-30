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

// HOSPITAL

Route::get('/hospital', [
    'uses'=>'Hospital@index',
    'as'=>'hospital.index'
]);


Route::get('/HospitalCompleteRegistration', [
    'uses'=>'Hospital@HospitalCompleteRegistration',
    'as'=>'Hospital.HospitalCompleteRegistration'
]);

Route::post('/HospitalCompleteRegistration', [
    'uses'=>'Hospital@addRegisterDetials',
    'as'=>'Hospital.HospitalCompleteRegistrationPOST'
]);

Route::get('/beds', [
    'uses'=>'HOSPITAL@beds',
    'as'=>'Hospital.beds'
]);

Route::post('/addBedDetials', [
    'uses'=>'Hospital@addBedDetials',
    'as'=>'Hospital.addBedDetialsPOST'
]);

Route::get('/AddSpecialization', [
    'uses'=>'Hospital@AddSpecialization',
    'as'=>'Hospital.AddSpecialization'
]);

Route::post('/addSpecializationDetials', [
    'uses'=>'Hospital@addSpecializationDetials',
    'as'=>'Hospital.addSpecializationDetialsPOST'
]);

Route::get('/addDoctor', [
    'uses'=>'Hospital@addDoctor',
    'as'=>'Hospital.addDoctor'
]);

Route::get('/AllDoctor/{docid}/{userid}', [
    'uses'=>'Hospital@AllDoctor',
    'as'=>'Hospital.AllDoctor'
]);

Route::get('/acceptHospital/{id}/{hosid}','ADMIN@acceptHospital');



// ADMIN

Route::get('/ad', [
    'uses'=>'ADMIN@index',
    'as'=>'admin.index'
]);


Route::get('/verifyh', [
    'uses'=>'ADMIN@verifyhospital',
    'as'=>'verifyhospital'
]);

Route::post('/verifyhospital', [
    'uses'=>'ADMIN@verifyhospitalPOST',
    'as'=>'admin.verifyhospitalPOST'
]);

Route::get('/Doc1/{A}','ADMIN@viewDoc1');
Route::get('/Doc2/{B}','ADMIN@viewDoc2');

Route::get('/acceptHospital/{id}/{hosid}','ADMIN@acceptHospital');
Route::get('/rejectHospital/{id}/{hosid}','ADMIN@rejectHospital');




});