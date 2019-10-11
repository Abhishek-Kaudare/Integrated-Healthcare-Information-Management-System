<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon;
use Illuminate\Support\Facades\Input;



class BloodBank extends Controller
{
    public function index(){
        $role = session()->get('id');
        $requests = DB::select("SELECT * FROM users WHERE user_id=$role AND role_id=5");
        return view('BloodBank.index')->with('data',$requests);
    }

    public function BloodBankCompleteRegistration(){
        return view('BloodBank.Complete_Register');
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
            
              $query = "INSERT INTO `bloodbank`(`bloodbank_id`, `manager_id`, `bloodbank_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`)
     VALUES (null,'$id','$name','$city','$state','$pincode','$mytime','$address','$con1',0,'$lat','$long','$doc1file','$doc2file');";
        }
        else{
                  $query = "INSERT INTO `bloodbank`(`bloodbank_id`, `manager_id`, `bloodbank_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`)
     VALUES (null,'$id','$name','$city','$state','$pincode','$mytime','$address','$con1',0,'$lat','$lng','$doc1file','$doc2file');";
            }


    
   
    DB::insert($query);

    $query2 = "UPDATE users SET auth = 2 WHERE user_id = $id";
    DB::select($query2);            
    return redirect()->route('BloodBank.index');
    }


    public function addblood(){
        session_start();
        $id = session()->get('id');
        $query = "SELECT bloodbank_id from bloodbank WHERE manager_id=$id";
        $requests = DB::select($query);
        $bloodbank_id = $requests[0]->bloodbank_id;
        $msdm1 ="SELECT * FROM  bloodtype";
        $data1 = DB::select($msdm1);
        return view('BloodBank.addblood')->with('dat',$data1);
    }


    public function addbloodPOST(Request $request){
        session_start();
        $id = session()->get('id');
        $query = "SELECT bloodbank_id from bloodbank WHERE manager_id=$id";
        $requests = DB::select($query);
        $bloodbank_id = $requests[0]->bloodbank_id;

        $bloodtype = $request->type;
        $quantity = $request->quantity;

        $query = "SELECT quantity from blood_map WHERE bloodtype_id=$bloodtype AND bloodbank_id=$bloodbank_id";
        $requests = DB::select($query);
        $q = $requests[0]->quantity;

        $total = $q +$quantity;

        $query2 = "UPDATE blood_map SET quantity = $total WHERE bloodbank_id=$bloodbank_id AND bloodtype_id=$bloodtype";
        DB::select($query2);            
        return redirect()->route('BloodBank.addblood');

    }
        
    public function checkoutblood(){
        session_start();
        $id = session()->get('id');
        $query = "SELECT bloodbank_id from bloodbank WHERE manager_id=$id";
        $requests = DB::select($query);
        $bloodbank_id = $requests[0]->bloodbank_id;
        $q ="SELECT b.*,bt.*,bm.* FROM  bloodbank b JOIN blood_map bm JOIN bloodtype bt ON b.bloodbank_id=bm.bloodbank_id AND bm.bloodtype_id=bt.id AND  b.bloodbank_id=$bloodbank_id";      
        $data = DB::select($q);
        
        $final = array();
        $dis = array();
        foreach($data as $item){
            if($item->quantity <=0 ){
                array_push($dis, $item);
            }
            else{
                array_push($final, $item);
            }
        }
        
        return view('BloodBank.checkoutblood')->with('dat',array('dis'=>$dis,'final'=>$final));   
    }

    public function checkoutbloodPOST(Request $request){
        session_start();
        $id = session()->get('id');
        $query = "SELECT bloodbank_id from bloodbank WHERE manager_id=$id";
        $requests = DB::select($query);
        $bloodbank_id = $requests[0]->bloodbank_id;

        $q =  $request->quantity;
        $bt = $request->bt;

        $query1 = "SELECT quantity from blood_map WHERE bloodbank_id=$bloodbank_id AND bloodtype_id=$bt";
        $requests2 = DB::select($query1);
        $c = $requests2[0]->quantity;
        
        if($c <$q){
            return redirect()->route('BloodBank.index');
        }
        else{   

            $total = $c - $q;
            $query2 = "UPDATE blood_map SET quantity = $total WHERE bloodbank_id=$bloodbank_id AND bloodtype_id=$bt";
            DB::select($query2);            
            return redirect()->route('BloodBank.checkoutblood');
        }
        return redirect()->route('BloodBank.checkoutblood');
    }


    public function addnewcam(){
        
        return view('BloodBank.addnewcam');
    }


    public function addcampPOST(Request $request){
        session_start();
        $id = session()->get('id');
        $query = "SELECT bloodbank_id from bloodbank WHERE manager_id=$id";
        $requests = DB::select($query);
        $bloodbank_id = $requests[0]->bloodbank_id;

        $q = "INSERT INTO `campaign`(`id`, `name`, `bloodbank_id`, `start`, `address`, `end`) 
        VALUES (null,'$request->name',$bloodbank_id,'$request->start','$request->address','$request->end')";
        DB::select($q);   
        return redirect()->route('BloodBank.index');
    }
}
