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
// Route::post('/specifictypeofdoctors/{typeid}','API\Android@specifictypeofdoctors');


Route::post('/alltypesofhospital','API\Android@alltypesofhospital');
Route::post('/specifictypeofhospital/{typeid}','API\Android@specifictypeofhospital');



Route::post('/ihsopital/{typeid}','API\Android@ihsopital');
Route::post('/ibloodbank/{typeid}','API\Android@ibloodbank');
Route::post('/ipharmacy/{typeid}','API\Android@ipharmacy');
Route::post('/idoctor/{typeid}','API\Android@idoctor');

Route::post('/specialitydr/{typeid}','API\Android@speciality');

Route::post('/bedavail/{typeid}','API\Android@bedavail');
Route::post('/mriavail/{typeid}','API\Android@mriavail');


Route::post('/sendhosreview/{hosid}/{email}/{review}/{stars}','API\Android@sendhosreview');
Route::post('/getreview/{hosid}','API\Android@getreview');

Route::post('/senddrreview/{hosid}/{email}/{review}/{stars}','API\Android@senddrreview');
Route::post('/getreviewdr/{hosid}','API\Android@getreviewdr');


Route::post('/docfilter/{lang}/{spec}','API\Android@docfilter');
Route::post('/hospitalfilter/{hostype}/{spec}/{lat}/{long}','API\Android@hospitalfilter');

Route::post('/medavail/{name}/{lat}/{long}','API\Android@medavail');




