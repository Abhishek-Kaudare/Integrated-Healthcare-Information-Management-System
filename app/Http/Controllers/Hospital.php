<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon;
use Illuminate\Support\Facades\Input;
class Hospital extends Controller
{
    public function index(){
        
        $role = session()->get('id');
        $requests = DB::select("SELECT * FROM users WHERE user_id=$role");
        // $data[] = (array)$requests;
            return view('Hospital.index')->with('data',$requests);
        // if($data[0][0]->auth===0){
        //     return view('Hospital.index')->with('data',);
        // }
        // return view('Hospital.index');
    }

    public function HospitalCompleteRegistration(){
        return view('Hospital.Complete_Register');
    }
    
    public function addRegisterDetials(Request $request){

        $name = $request->name;
        $city = $request->city;
        $pincode = $request->pincode;
        $state = $request->state;
        $address = $request->address;
        $con1 = $request->con1;
        $con2 = $request->con2;
        $con3 = $request->con3;
        $lat  = $request->lat;
        $long = $request->long;
        session_start();
        $id = session()->get('id');
            if($request->hasFile('doc1')){
            if (Input::file('doc1')->isValid()) {
                $file = Input::file('doc1');
                $destination = storage_path('/');
                $ext= $file->getClientOriginalExtension();
                $mainFilename = str_random(6).'.'.time();
                $doc1file = $name.$id.'doc1'.'.'.$ext;
                $file->move($destination, $doc1file);
            }
            }
            if($request->hasFile('doc2')){
                if (Input::file('doc2')->isValid()) {
                    $file = Input::file('doc2');
                    $destination = storage_path('/');
                    $ext= $file->getClientOriginalExtension();
                    $mainFilename = str_random(6).'.'.time();
                    $doc2file = $name.$id.'doc2'.'.'.$ext;
                    $file->move($destination, $doc1file);
                }
            }
            $mytime = Carbon\Carbon::now();
        $current_date_time = $mytime->toDateTimeString();

    
     $query = "INSERT INTO `hospital`(`hospital_id`, `manager_id`, `hospital_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`)
     VALUES (null,'$id','$name','$city','$state','$pincode','$mytime','$address','$con1',0,'$lat','$long','$doc1file','$doc2file');";
    DB::insert($query);

    $query2 = "UPDATE users SET auth = 1 WHERE user_id = $id";
    DB::select($query2);            
    return redirect()->route('hospital.index');
    }
    
}
