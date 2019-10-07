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

Route::get('/requestDoctor/{hosid}/{userid}/{docid}', [
    'uses'=>'Hospital@requestDoctor',
    'as'=>'Hospital.requestDoctor'
]);

Route::post('/requestDoctor/{hosid}/{userid}/{docid}', [
    'uses'=>'Hospital@requestDoctor',
    'as'=>'Hospital.requestDoctorPOST'
]);

Route::get('/doctorAttendance', [
    'uses'=>'Hospital@doctorAttendance',
    'as'=>'Hospital.doctorAttendance'
]);

Route::post('/drAttendance', [
    'uses'=>'Hospital@drAttendance',
    'as'=>'Hospital.drAttendancePOST'
]);

Route::get('/addpatient', [
    'uses'=>'Hospital@addpatient',
    'as'=>'Hospital.addpatient'
]);

Route::post('/addpatient', [
    'uses'=>'Hospital@addpatientPOST',
    'as'=>'Hospital.addpatientPOST'
]);

Route::get('/shiftpatient', [
    'uses'=>'Hospital@shiftpatient',
    'as'=>'Hospital.shiftpatient'
]);

Route::post('/shiftpatient', [
    'uses'=>'Hospital@shiftpatientPOST',
    'as'=>'Hospital.shiftpatientPOST'
]);


Route::get('/dischargepatient', [
    'uses'=>'Hospital@dischargepatient',
    'as'=>'Hospital.dischargepatient'
]);

Route::post('/dischargepatient', [
    'uses'=>'Hospital@dischargepatientPOST',
    'as'=>'Hospital.dischargepatientPOST'
]);


// Doctor
Route::get('/Doctor', [
    'uses'=>'Doctor@index',
    'as'=>'Doctor.index'
]);


Route::get('/DoctorCompleteRegistration', [
    'uses'=>'Doctor@DoctorCompleteRegistration',
    'as'=>'Doctor.DoctorCompleteRegistration'
]);

Route::post('/DoctorCompleteRegistration', [
    'uses'=>'Doctor@addRegisterDetials',
    'as'=>'Doctor.DoctorCompleteRegistrationPOST'
]);

Route::get('/medicalspeciality', [
    'uses'=>'Doctor@medicalspeciality',
    'as'=>'Doctor.medicalspeciality'
]);


Route::post('/addSpec', [
    'uses'=>'Doctor@addSpec',
    'as'=>'Doctor.addSpecPOST'
]);


Route::get('/language', [
    'uses'=>'Doctor@language',
    'as'=>'Doctor.language'
]);

Route::post('/addlang', [
    'uses'=>'Doctor@addlang',
    'as'=>'Doctor.addlangPOST'
]);

Route::get('/awards', [
    'uses'=>'Doctor@awards',
    'as'=>'Doctor.awards'
]);

Route::post('/awards', [
    'uses'=>'Doctor@awardsPOST',
    'as'=>'Doctor.awardsPOST'
]);


Route::get('/research', [
    'uses'=>'Doctor@research',
    'as'=>'Doctor.research'
]);

Route::post('/research', [
    'uses'=>'Doctor@researchPOST',
    'as'=>'Doctor.researchPOST'
]);

Route::get('/summary', [
    'uses'=>'Doctor@summary',
    'as'=>'Doctor.summary'
]);

Route::post('/summary', [
    'uses'=>'Doctor@summaryPOST',
    'as'=>'Doctor.summaryPOST'
]);

Route::get('/hosrequst', [
    'uses'=>'Doctor@hosrequst',
    'as'=>'Doctor.hosrequst'
]);

Route::post('/hosrequst', [
    'uses'=>'Doctor@hosrequstPOST',
    'as'=>'Doctor.hosrequstPOST'
]);

Route::get('/accepthospital/{docid}/{hosid}', [
    'uses'=>'Doctor@accepthospital',
    'as'=>'Doctor.accepthospital'
]);


Route::get('/rejecthospital/{docid}/{hosid}', [
    'uses'=>'Doctor@rejecthospital',
    'as'=>'Doctor.rejecthospital'
]);

Route::post('/settimings', [
    'uses'=>'Doctor@settimings',
    'as'=>'Doctor.settimings'
]);


// Pharmacy

Route::get('/Pharmacy', [
    'uses'=>'Pharmacy@index',
    'as'=>'Pharmacy.index'
]);


Route::get('/PharmacyCompleteRegistration', [
    'uses'=>'Pharmacy@PharmacyCompleteRegistration',
    'as'=>'Pharmacy.PharmacyCompleteRegistration'
]);

Route::post('/PharmacyCompleteRegistration', [
    'uses'=>'Pharmacy@addRegisterDetials',
    'as'=>'Pharmacy.PharmacyCompleteRegistrationPOST'
]);

Route::get('/checkoutmed', [
    'uses'=>'Pharmacy@checkoutmed',
    'as'=>'Pharmacy.checkoutmed'
]);
Route::get('/addmed', [
    'uses'=>'Pharmacy@addmed',
    'as'=>'Pharmacy.addmed'
]);

Route::get('/addnewmed', [
    'uses'=>'Pharmacy@addnewmed',
    'as'=>'Pharmacy.addnewmed'
]);

Route::post('/addnewmed', [
    'uses'=>'Pharmacy@addnewmedPOST',
    'as'=>'Pharmacy.addnewmedPOST'
]);

Route::post('/addmedPOST', [
    'uses'=>'Pharmacy@addmedPOST',
    'as'=>'Pharmacy.addmedPOST'
]);

Route::post('/checkoutmedPOST', [
    'uses'=>'Pharmacy@checkoutmedPOST',
    'as'=>'Pharmacy.checkoutmedPOST'
]);





// Blood Bank

Route::get('/BloodBank', [
    'uses'=>'BloodBank@index',
    'as'=>'BloodBank.index'
]);


Route::get('/BloodBankCompleteRegistration', [
    'uses'=>'BloodBank@BloodBankCompleteRegistration',
    'as'=>'BloodBank.BloodBankCompleteRegistration'
]);

Route::post('/BloodBankCompleteRegistration', [
    'uses'=>'BloodBank@addRegisterDetials',
    'as'=>'BloodBank.BloodBankCompleteRegistrationPOST'
]);

Route::get('/addblood', [
    'uses'=>'BloodBank@addblood',
    'as'=>'BloodBank.addblood'
]);

Route::get('/checkoutblood', [
    'uses'=>'BloodBank@checkoutblood',
    'as'=>'BloodBank.checkoutblood'
]);

Route::post('/addbloodPOST', [
    'uses'=>'BloodBank@addbloodPOST',
    'as'=>'BloodBank.addbloodPOST'
]);

Route::post('/checkoutbloodPOST', [
    'uses'=>'BloodBank@checkoutbloodPOST',
    'as'=>'BloodBank.checkoutbloodPOST'
]);

Route::get('/addnewcam', [
    'uses'=>'BloodBank@addnewcam',
    'as'=>'BloodBank.addnewcam'
]);
Route::post('/addcampPOST', [
    'uses'=>'BloodBank@addcampPOST',
    'as'=>'BloodBank.addcampPOST'
]);






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


Route::get('/verifyd', [
    'uses'=>'ADMIN@verifydoctor',
    'as'=>'verifydoctor'
]);

Route::get('/acceptDoctor/{docid}/{userid}','ADMIN@acceptDoctor');
Route::get('/rejectDoctor/{docid}/{userid}','ADMIN@rejectDoctor');


Route::get('/verifyp', [
    'uses'=>'ADMIN@verifypharmacy',
    'as'=>'verifypharmacy'
]);

Route::get('/acceptPharmacy/{docid}/{userid}','ADMIN@acceptPharmacy');
Route::get('/rejectPharmacy/{docid}/{userid}','ADMIN@rejectPharmacy');

Route::get('/verifyb', [
    'uses'=>'ADMIN@verifyBloodBank',
    'as'=>'verifyBloodBank'
]);

Route::get('/acceptBloodBank/{docid}/{userid}','ADMIN@acceptBloodBank');
Route::get('/rejectBloodBank/{docid}/{userid}','ADMIN@rejectBloodBank');





});