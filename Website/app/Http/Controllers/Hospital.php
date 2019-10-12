<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon;
use Illuminate\Support\Facades\Input;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Config;
use Illuminate\Support\Facades\Hash;
use Cookie;
use Tracker;
use Session;
use Redirect;

class Hospital extends Controller
{
    public function index(){
        $role = session()->get('id');
        $requests = DB::select("SELECT u.* FROM users u WHERE u.user_id=$role");
        
       




        return view('Hospital.index')->with('data',$requests);
    }

    public function HospitalCompleteRegistration(){
        $requests = DB::select("SELECT * FROM hostype");
        return view('Hospital.Complete_Register')->with('data',$requests);
    }
    
    public function addRegisterDetials(Request $request){
        $user_id = session()->get('id');
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
            
            $query = "INSERT INTO `hospital`(`hospital_id`, `manager_id`, `hospital_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`)
             VALUES (null,'$id','$name','$city','$state','$pincode','$mytime','$address','$con1',0,'$lat','$lng','$doc1file','$doc2file');";
        }
        else{
                $query = "INSERT INTO `hospital`(`hospital_id`, `manager_id`, `hospital_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`)
                VALUES (null,'$id','$name','$city','$state','$pincode','$mytime','$address','$con1',0,'$lat','$long','$doc1file','$doc2file');";
            }

            DB::insert($query);

            $query2 = "UPDATE users SET auth = 2 WHERE user_id = $id";
            DB::select($query2);  

            $query = "SELECT hospital_id from hospital WHERE manager_id=$user_id";
            $requests = DB::select($query);
            $hosid = $requests[0]->hospital_id;
            $type = $request->type;

    $q = "INSERT INTO `hostype_map_hos`(`id`, `hospital_id`, `hostype_id`) 
    VALUES (null,$hosid,$type)";
        DB::select($q);  


    return redirect()->route('hospital.index');
    }

    public function beds(){
        $role = session()->get('id');
        $query = "SELECT u.*, h.*, r.*,rt.* FROM users u JOIN hospital h JOIN roomcount r JOIN room_type rt ON u.user_id = h.manager_id WHERE u.user_id=$role AND r.hospital_id=h.hospital_id AND rt.typeid=room_type";
        $requests = DB::select($query);
        if($requests == null){
            $mydata = array('count'=>'0');
            $data = array_merge($mydata,$requests);
            return view('Hospital.beds')->with('data',$data);
        }
        else{
            // $mydata = array('count'=>'1');
            // $data = array_merge($mydata,$requests);
            return view('Hospital.beds')->with('data',$requests);
        }        
    }
    

     public function addBedDetials(Request $request){
        $user_id = session()->get('id');
        $a1 = $request->count1;
        $a2 = $request->count2;
        $a3 = $request->count3;
        $a4 = $request->count4;
        $a5 = $request->count5;
        $a6 = $request->count6;
        $a7 = $request->count7;
        $a8 = $request->count8;

        $b1 = $request->price1;
        $b2 = $request->price2;
        $b3 = $request->price3;
        $b4 = $request->price4;
        $b5 = $request->price5;
        $b6 = $request->price6;
        $b7 = $request->price7;
        $b8 = $request->price8;

        // echo $p;

        for($i=1;$i<9;$i++){

            $query = "SELECT hospital_id from hospital WHERE manager_id=$user_id";
            $requests = DB::select($query);
            $hosid = $requests[0]->hospital_id;
            $query1 = "SELECT ccount FROM roomcount WHERE room_type=$i AND hospital_id=$hosid";
            $requests1 = DB::select($query1);
            $count = $requests1[0]->ccount;

            $total = $count + ${"a".$i};
            $query2 = "UPDATE roomcount SET ccount = $total WHERE hospital_id = $hosid AND room_type=$i";
            $requests2 = DB::statement($query2);

            $query2 = "SELECT Available FROM roomcount WHERE room_type=$i AND hospital_id=$hosid";
            $requests2 = DB::select($query2);
            $Available = $requests2[0]->Available;

            $total1 = $Available + ${"a".$i};
            $query3 = "UPDATE roomcount SET Available = $total1 WHERE hospital_id = $hosid AND room_type=$i";
            $requests3 = DB::statement($query3);


        }

        

        for($i=1;$i<9;$i++){
            $query = "SELECT hospital_id from hospital WHERE manager_id=$user_id";
            $requests = DB::select($query);
            $hosid = $requests[0]->hospital_id;
            $query1 = "SELECT ccount FROM roomcount WHERE room_type=$i AND hospital_id=$hosid";
            $requests1 = DB::select($query1);
            $count = $requests1[0]->ccount;

            if($count==0){
                $price = ${"b".$i};
                 $query2 = "UPDATE roomcount SET price = $price WHERE hospital_id = $hosid AND room_type=$i";
                 $requests2 = DB::statement($query2);
            }
        }

        return redirect()->route('hospital.index');

      
    }

    public function AddSpecialization(){
        $role = session()->get('id');
        $query = "SELECT u.*, h.*,soh.*,sohm.* FROM users u JOIN hospital h JOIN specialization_of_hospital soh JOIN specialization_of_hospital_mapped sohm ON u.user_id = h.manager_id WHERE u.user_id=$role  AND h.hospital_id=sohm.hospital_id AND sohm.specialization_of_hospital_id=soh.idd";
        $requests = DB::select($query);
        if($requests == null){
            $mydata = array('count'=>'0');
            $data = array_merge($mydata,$requests);
            return view('Hospital.beds')->with('data',$data);
        }
        else{
            return view('Hospital.Specialization')->with('data',$requests);
        }
    }

    public function addSpecializationDetials(Request $request){
        $user_id = session()->get('id');
        $a1 = $request->count1;
        $a2 = $request->count2;
        $a3 = $request->count3;
        $a4 = $request->count4;
        $a5 = $request->count5;
        $a6 = $request->count6;
        $a7 = $request->count7;
        $a8 = $request->count8;

        for($i=1;$i<9;$i++){

            $query = "SELECT hospital_id from hospital WHERE manager_id=$user_id";
            $requests = DB::select($query);
            $hosid = $requests[0]->hospital_id;
            $query1 = "SELECT count FROM specialization_of_hospital_mapped WHERE specialization_of_hospital_id=$i AND hospital_id=$hosid";
            $requests1 = DB::select($query1);
            $count = $requests1[0]->count;
            $total = $count + ${"a".$i};
            $query2 = "UPDATE specialization_of_hospital_mapped SET count = $total WHERE hospital_id = $hosid AND specialization_of_hospital_id=$i";
            $requests2 = DB::statement($query2);
        }
        return redirect()->route('hospital.index');
    }

    public function addDoctor(){
        $role = session()->get('id');
        // $query = "SELECT u.*,d.*,ms.*,msdm.* 
        // FROM users u  JOIN doctor d JOIN medical_speciality ms JOIN medical_speciality_doctor_mapped msdm  
        // ON u.user_id = d.user_id  
        // AND d.doctor_id=msdm.doctor_id AND msdm.medical_speciality_id=ms.medical_speciality_idd";
        $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
        $requests10 = DB::select($query10);
        $hosid = $requests10[0]->hospital_id;

        $query = "SELECT u.*,d.*
        FROM users u  JOIN doctor d 
        ON u.user_id = d.user_id
        " ;

        $query2 = "SELECT * FROM dr_request WHERE hospital_id=$hosid";


        $requests = DB::select($query);
        $requests2 = DB::select($query2);

        $already_there = array();
        $final = array();
        foreach($requests2 as $item1){
            array_push($already_there, $item1->doctor_id);

        }

        foreach($requests as $item){
            if(in_array( $item->doctor_id ,$already_there )){
                // echo "YES";
            }
            else{
                // dd($item);
                array_push($final, $item);
            }
        }

        
        // dd($final);



//             foreach($requests as $item)
//             print_r($item);
// echo "                                                                                           ";

//             foreach($requests2 as $item1)
// print_r($item1);
        // $data1 = array();
        // if($requests2 == null ){
        //     $data1 = $requests;
        // }
        // else{
        //     foreach($requests as $item){
        //         foreach($requests2 as $item1){
        //             if($item->doctor_id==$item1->doctor_id){
        //                     // array_push($data1, $item);
        //                 // break;
        //             }
        //             else{
        //                 // if( in_array( $item ,$data1 ) ){
        //                 //     break;
        //                 // }
        //                 // else{
        //                     // array_push($data1, $item);
        //                 // }
                        
        //             }
        //         }
        //     }


        // }

        // dd($data1);
        
        
        if($final == null){
            $mydata = array('count'=>'0');
            $data2 = array_merge($mydata,$final);
            return view('Hospital.addDoctor')->with('data',$final);
        }
        else{
            return view('Hospital.addDoctor')->with('data',$final);
        }
    }

    public function AllDoctor($docid,$userid){
        $role = session()->get('id');
        $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
        $requests10 = DB::select($query10);
        $hosid = $requests10[0]->hospital_id;

        // $query="SELECT u.*,d.*,ms.*,msdm.* FROM users u JOIN doctor d JOIN medical_speciality ms JOIN medical_speciality_doctor_mapped msdm  ON u.user_id = d.user_id AND d.doctor_id=msdm.doctor_id AND msdm.medical_speciality_id=ms.medical_speciality_idd AND u.user_id=$userid AND d.doctor_id=$docid";
        $userdata = "SELECT u.*,d.* FROM users u JOIN doctor d  ON u.user_id = d.user_id AND u.user_id=$userid AND d.doctor_id=$docid";
        $rap = "SELECT * FROM research_and_publication WHERE doctor_id=$docid";
        $aaa = "SELECT * FROM awards_and_achievement WHERE doctor_id=$docid";
        $msdm ="SELECT ms.*,msdm.* FROM  medical_speciality ms JOIN medical_speciality_doctor_mapped msdm  ON msdm.medical_speciality_id=ms.medical_speciality_id AND  msdm.doctor_id=$docid";
        $lan = "SELECT l.*,lm.* FROM languages l JOIN languages_dr_mapped lm ON l.id=lm.languageid WHERE lm.doctor_id=$docid";
        // $query4 = "SELECT * FROM awards_and_achievement WHERE doctor_id=$docid";
        
        $requests1 = DB::select($userdata);
        $requests2 = DB::select($rap);
        $requests3 = DB::select($aaa);
        $requests4 = DB::select($msdm);
        $requests5 = DB::select($lan);
        
        
        return view('Hospital.AllDoctor')->with('data',array('doctor'=>$requests1,'rap'=>$requests2,'aaa'=>$requests3,'hosid'=>$hosid,'msdm'=>$requests4,'languages'=>$requests5));
        if($requests == null){
        }
        else{
            return view('Hospital.AllDoctor')->with('data',$requests);
        }
    }



    
    public function requestDoctor($hosid,$userid,$docid){

        $query = "INSERT INTO `dr_request`(`id`, `doctor_id`, `hospital_id`, `initiated_by`, `stat`)
         VALUES (null,$docid,$hosid,0,0)";
        $requests = DB::select($query);

        return redirect()->route('Hospital.addDoctor');

    }

    public function doctorAttendance (){

        return view('Hospital.doctorAttendance');


    }

 public function drAttendance(Request $request){
        $role = session()->get('id');
        $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
        $requests10 = DB::select($query10);
        $hosid = $requests10[0]->hospital_id;
        $mytime = Carbon\Carbon::now();
        $current_date_time = $mytime->toDateTimeString();
        $docid = $request->docid;
        $query = "INSERT INTO `attendance`(`id`, `doctor_id`, `hospital_id`, `date_time`) 
        VALUES (null,$docid,$hosid,'$current_date_time')";
        $requests = DB::select($query);

        return redirect()->route('Hospital.doctorAttendance');
        

    }
    
    public function addpatient(){
        $role = session()->get('id');
        $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
        $requests10 = DB::select($query10);
        $hosid = $requests10[0]->hospital_id;        
        $query="SELECT rt.*,rc.* FROM roomcount rc JOIN room_type rt  ON rt.id = rc.room_type AND rc.hospital_id=$hosid";
        $requests = DB::select($query);
        return view('Hospital.addpatient')->with('data',$requests);
    }
 

    public function addpatientPOST(Request $request){
        $role = session()->get('id');
        $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
        $requests10 = DB::select($query10);
        $hosid = $requests10[0]->hospital_id;      

        $room =  $request->room;
        $query2 = "SELECT Available FROM roomcount WHERE room_type=$room AND hospital_id=$hosid";
        $requests2 = DB::select($query2);
        $Available = $requests2[0]->Available;

        $total1 = $Available - 1;
        $query3 = "UPDATE roomcount SET Available = $total1 WHERE hospital_id = $hosid AND room_type=$room";
        $requests3 = DB::statement($query3);

        return redirect()->route('Hospital.addpatient');
    }


    public function shiftpatient(){
        $role = session()->get('id');
        $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
        $requests10 = DB::select($query10);
        $hosid = $requests10[0]->hospital_id;        
        $query="SELECT rt.*,rc.* FROM roomcount rc JOIN room_type rt  ON rt.id = rc.room_type AND rc.hospital_id=$hosid";
        $requests = DB::select($query);
        return view('Hospital.shiftpatient')->with('data',$requests);
        
    }
    
    public function shiftpatientPOST(Request $request){
        $role = session()->get('id');
        $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
        $requests10 = DB::select($query10);
        $hosid = $requests10[0]->hospital_id;      

        $room =  $request->room;
        $query2 = "SELECT Available FROM roomcount WHERE room_type=$room AND hospital_id=$hosid";
        $requests2 = DB::select($query2);
        $Available = $requests2[0]->Available;

        $total1 = $Available + 1;
        $query3 = "UPDATE roomcount SET Available = $total1 WHERE hospital_id = $hosid AND room_type=$room";
        $requests3 = DB::statement($query3);

        $room =  $request->roomshift;
        $query2 = "SELECT Available FROM roomcount WHERE room_type=$room AND hospital_id=$hosid";
        $requests2 = DB::select($query2);
        $Available = $requests2[0]->Available;

        $total1 = $Available - 1;
        $query3 = "UPDATE roomcount SET Available = $total1 WHERE hospital_id = $hosid AND room_type=$room";
        $requests3 = DB::statement($query3);

        

        return redirect()->route('Hospital.shiftpatient');
    }




        public function dischargepatient(){
            $role = session()->get('id');
            $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
            $requests10 = DB::select($query10);
            $hosid = $requests10[0]->hospital_id;        
            $query="SELECT rt.*,rc.* FROM roomcount rc JOIN room_type rt  ON rt.id = rc.room_type AND rc.hospital_id=$hosid";
            $requests = DB::select($query);
            return view('Hospital.dischargepatient')->with('data',$requests);
        }

        public function dischargepatientPOST(Request $request){
            $role = session()->get('id');
            $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
            $requests10 = DB::select($query10);
            $hosid = $requests10[0]->hospital_id;      

            $room =  $request->room;
            $query2 = "SELECT Available FROM roomcount WHERE room_type=$room AND hospital_id=$hosid";
            $requests2 = DB::select($query2);
            $Available = $requests2[0]->Available;

            $total1 = $Available + 1;
            $query3 = "UPDATE roomcount SET Available = $total1 WHERE hospital_id = $hosid AND room_type=$room";
            $requests3 = DB::statement($query3);

            return redirect()->route('Hospital.dischargepatient');
        }
        
    
        public function alldoctorsaffliated(){
            $role = session()->get('id');
            $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
            $requests10 = DB::select($query10);
            $hosid = $requests10[0]->hospital_id;  
            // $query = "SELECT u.*, h.*,d.*,dr.*,dmh.*,dt.*
            // FROM users u JOIN hospital h JOIN doctor d JOIN dr_request dr JOIN doctor_mapped_hospital dmh JOIN dr_timings dt
            // WHERE u.role_id=2 AND u.auth=1 AND h.hospital_id=$hosid AND d.doctor_id=dr.doctor_id AND 
            // dr.hospital_id=$hosid AND d.user_id=u.user_id AND dr.stat=1 AND dmh.hospital_id=$hosid 
            // AND dmh.doctor_id=d.doctor_id AND dt.hospital_id=$hosid 
            // AND dt.doctor_id=d.doctor_id ";

            $query = "SELECT u.*, h.*,d.*,dr.*,dt.*
            FROM users u JOIN hospital h JOIN doctor d JOIN dr_request dr  JOIN dr_timings dt
            WHERE u.role_id=2 AND u.auth=1 AND h.hospital_id=$hosid AND d.doctor_id=dr.doctor_id AND 
            dr.hospital_id=$hosid AND d.user_id=u.user_id AND dr.stat=1 AND dt.hospital_id=$hosid 
            AND dt.doctor_id=d.doctor_id ";
            $requests = DB::select($query);
    
            return view('Hospital.alldoctorsaffliated')->with('data',$requests);
        }

        public function removeDoctor($docid,$uid){
            
            $role = session()->get('id');
            $query10 = "SELECT hospital_id from hospital WHERE manager_id=$role";
            $requests10 = DB::select($query10);
            $hosid = $requests10[0]->hospital_id;  
            $query = "UPDATE dr_request SET stat=3 WHERE doctor_id = $docid AND hospital_id=$hosid";
            $requests = DB::select($query);
            return redirect()->route('Hospital.alldoctorsaffliated');
        }

}
