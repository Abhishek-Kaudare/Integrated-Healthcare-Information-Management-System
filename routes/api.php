<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello','API\AuthController@hello');
Route::post('/register','API\AuthController@register');
Route::post('/login','API\AuthController@login');
Route::post('/log','API\AuthController@log');

Route::post('/allhospital','API\Android@allhospital');
Route::post('/allpharmacy','API\Android@allpharmacy');
Route::post('/allbloodbank','API\Android@allbloodbank');
Route::post('/alldoctors','API\Android@alldoctors');
Route::post('/alltypesofdoctor','API\Android@alltypesofdoctor');
Route::post('/specifictypeofdoctors/{typeid}','API\Android@specifictypeofdoctors');


Route::post('/alltypesofhospital','API\Android@alltypesofhospital');
Route::post('/specifictypeofhospital/{typeid}','API\Android@specifictypeofhospital');

Route::post('/sort','API\Android@alltypesofhospital');

Route::post('/ihsopital/{typeid}','API\Android@ihsopital');











