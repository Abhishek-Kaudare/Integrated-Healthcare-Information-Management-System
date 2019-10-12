<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class Pharmacy extends Controller
{
     public function index(){
        $role = session()->get('id');
        $requests = DB::select("SELECT * FROM users WHERE user_id=$role AND role_id=4");
        return view('Pharmacy.index')->with('data',$requests);
    }

    public function PharmacyCompleteRegistration(){
        return view('Pharmacy.Complete_Register');
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

            
         if($lat ==null){
            $encode = urlencode($address);
            $key = "AIzaSyAqAMKoI7eBdpGDuzowlZ65gBu_oN9WfWE";
            $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$encode}&key={$key}";

            $json = file_get_contents($url);
            $data = json_decode($json);

            $lat = $data->results[0]->geometry->location->lat;  
            $lng = $data->results[0]->geometry->location->lng;  
            
            $query = "INSERT INTO `pharmacy`(`pharmacy_id`, `manager_id`, `pharmacy_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`)
     VALUES (null,'$id','$name','$city','$state','$pincode','$mytime','$address','$con1',0,'$lat','$lng','$doc1file','$doc2file');";
        }
        else{
                $query = "INSERT INTO `pharmacy`(`pharmacy_id`, `manager_id`, `pharmacy_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`)
     VALUES (null,'$id','$name','$city','$state','$pincode','$mytime','$address','$con1',0,'$lat','$long','$doc1file','$doc2file');";
            }

     
    DB::insert($query);

    $query2 = "UPDATE users SET auth = 2 WHERE user_id = $id";
    DB::select($query2);            
    return redirect()->route('Pharmacy.index');
    }




    public function addnewmed(){

        session_start();
        $id = session()->get('id');

        $query = "SELECT pharmacy_id from pharmacy WHERE manager_id=$id";
        $requests = DB::select($query);
        $pharmacy_id = $requests[0]->pharmacy_id;

        $msdm ="SELECT p.*,mpm.* FROM  pharmacy p JOIN med_map mpm  ON p.pharmacy_id=mpm.pharmacy_id AND  p.pharmacy_id=$pharmacy_id";
        $msdm1 ="SELECT * FROM  medicines";
        $data = DB::select($msdm);
        $data1 = DB::select($msdm1);
        
        $already_there = array();
        $final = array();
        $dis = array();
        foreach($data as $item1){
            array_push($already_there, $item1->medicine_id);

        }

        foreach($data1 as $item){
            
            if(in_array( $item->id ,$already_there )){
                array_push($dis, $item);
            }
            else{
                
                array_push($final, $item);
            }
        }
        return view('Pharmacy.addnewmed')->with('dat',array('dis'=>$dis,'final'=>$final));

    }

    public function checkoutmed(){

        session_start();
        $id = session()->get('id');

        $query = "SELECT pharmacy_id from pharmacy WHERE manager_id=$id";
        $requests = DB::select($query);
        $pharmacy_id = $requests[0]->pharmacy_id;

        $q ="SELECT p.*,mpm.*,m.* FROM  pharmacy p JOIN med_map mpm JOIN medicines m ON p.pharmacy_id=mpm.pharmacy_id AND m.id=mpm.medicine_id AND  p.pharmacy_id=$pharmacy_id";
        
        $data = DB::select($q);
        
        $final = array();
        $dis = array();
       

        foreach($data as $item){
            
            if($item->ccount <=0 ){
                array_push($dis, $item);
            }
            else{
                
                array_push($final, $item);
            }
        }
        return view('Pharmacy.checkoutmed')->with('dat',array('dis'=>$dis,'final'=>$final));
        

        
    }


    public function addmed(){

        session_start();
        $id = session()->get('id');

        $query = "SELECT pharmacy_id from pharmacy WHERE manager_id=$id";
        $requests = DB::select($query);
        $pharmacy_id = $requests[0]->pharmacy_id;

        $msdm ="SELECT p.*,mpm.* FROM  pharmacy p JOIN med_map mpm  ON p.pharmacy_id=mpm.pharmacy_id AND  p.pharmacy_id=$pharmacy_id";
        $msdm1 ="SELECT * FROM  medicines";
        $q ="SELECT p.*,mpm.*,m.* FROM  pharmacy p JOIN med_map mpm JOIN medicines m ON p.pharmacy_id=mpm.pharmacy_id AND m.id=mpm.medicine_id AND  p.pharmacy_id=$pharmacy_id";
        $data = DB::select($msdm);
        $data1 = DB::select($msdm1);
        $data2 = DB::select($q);
        
        $already_there = array();
        $final = array();
        $dis = array();
        foreach($data as $item1){
            array_push($already_there, $item1->medicine_id);

        }

        foreach($data1 as $item){
            
            if(in_array( $item->id ,$already_there )){
                array_push($final, $item);
            }
            else{
                
                array_push($final, $item);
            }
        }
        return view('Pharmacy.addmed')->with('dat',array('dis'=>$dis,'final'=>$final,'count'=>$data2));


        
    }




    public function addnewmedPOST(Request $request){
        session_start();
        $id = session()->get('id');

        $query = "SELECT pharmacy_id from pharmacy WHERE manager_id=$id";
        $requests = DB::select($query);
        $pharmacy_id = $requests[0]->pharmacy_id;


        
        $medid = $request->med;

        $query = "INSERT INTO `med_map`(`id`, `medicine_id`, `pharmacy_id`, `ccount`) 
        VALUES (null,$medid,$pharmacy_id,0)";
        DB::select($query);
        return redirect()->route('Pharmacy.addnewmed');

    }

    

    public function addmedPOST(Request $request){
        session_start();
        $id = session()->get('id');

        $query = "SELECT pharmacy_id from pharmacy WHERE manager_id=$id";
        $requests = DB::select($query);
        $pharmacy_id = $requests[0]->pharmacy_id;


        $count =  $request->count;
        $medid = $request->med;

        $query1 = "SELECT ccount from med_map WHERE pharmacy_id=$pharmacy_id AND medicine_id=$medid";
        $requests2 = DB::select($query1);
        $c = $requests2[0]->ccount;

        $total = $c + $count;

        $query2 = "UPDATE med_map SET ccount = $total WHERE pharmacy_id=$pharmacy_id AND medicine_id=$medid";
        DB::select($query2);            
        return redirect()->route('Pharmacy.addmed');

    }

    public function checkoutmedPOST(Request $request){
        
         session_start();
        $id = session()->get('id');

        $query = "SELECT pharmacy_id from pharmacy WHERE manager_id=$id";
        $requests = DB::select($query);
        $pharmacy_id = $requests[0]->pharmacy_id;


        $count =  $request->count;
        $medid = $request->med;

        $query1 = "SELECT ccount from med_map WHERE pharmacy_id=$pharmacy_id AND medicine_id=$medid";
        $requests2 = DB::select($query1);
        $c = $requests2[0]->ccount;
        
        if($c <$count){
            return redirect()->route('Pharmacy.index');
        }
        else{   

            $total = $c - $count;
            $query2 = "UPDATE med_map SET ccount = $total WHERE pharmacy_id=$pharmacy_id AND medicine_id=$medid";
            DB::select($query2);            
            return redirect()->route('Pharmacy.checkoutmed');
        }
        return redirect()->route('Pharmacy.checkoutmed');
    }


}
