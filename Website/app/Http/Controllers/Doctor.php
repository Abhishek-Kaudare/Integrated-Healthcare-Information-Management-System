<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon;
use DateTime;
use Illuminate\Support\Facades\Input;
class Doctor extends Controller
{
    public function index(){

           session_start();
    if((session()->has('access'))){
         $role = session()->get('id');
        $query = "SELECT * FROM users u WHERE u.user_id=$role";
        $requests = DB::select($query);
        // echo $query;
        return view('Doctor.index')->with('data',$requests);
    }
    else{
        return redirect()->route('login');
    }


       
    }

    public function DoctorCompleteRegistration(){

              session_start();
    if((session()->has('access'))){
return view('Doctor.Complete_Register');
    }
    else{
        return redirect()->route('login');
    }


        
    }
    


    public function addRegisterDetials(Request $request){
      session_start();
    if((session()->has('access'))){
        $license = $request->license;
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

         $query = "SELECT name from users WHERE user_id=$id";
         $requests = DB::select($query);
         $name = $requests[0]->name;


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

    $query2 = "UPDATE users SET auth = 2,address='$address',phone='$con1',city='$city',state='$state',pincode='$pincode' WHERE user_id = $id";
    DB::select($query2);            

    $query3 = "INSERT INTO `doctor`(`doctor_id`, `user_id`, `doc_license_no`, `work_exp`, `summary`,`doc1`,`doc2`) 
    VALUES (null,$id,$license,0,'','$doc1file','$doc2file')";
    DB::select($query3);            

    return redirect()->route('Doctor.index');
    }
    else{
        return redirect()->route('login');
    }
        
        
    }



    public function medicalspeciality(){

              session_start();
    if((session()->has('access'))){
$id = session()->get('id');

        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;

        $msdm ="SELECT ms.*,msdm.* FROM  medical_speciality ms JOIN medical_speciality_doctor_mapped msdm  ON msdm.medical_speciality_id=ms.medical_speciality_id AND  msdm.doctor_id=$docid";
        $msdm1 ="SELECT * FROM  medical_speciality ";
        $data = DB::select($msdm);
        $data1 = DB::select($msdm1);
    
        $already_there = array();
        $final = array();
        $dis = array();
        foreach($data as $item1){
            array_push($already_there, $item1->medical_speciality_id);

        }

        foreach($data1 as $item){
            
            if(in_array( $item->medical_speciality_id ,$already_there )){
                array_push($dis, $item);
            }
            else{
                
                array_push($final, $item);
            }
        }
        return view('Doctor.medicalspeciality')->with('dat',array('dis'=>$dis,'final'=>$final));
    }
    else{
        return redirect()->route('login');
    }


        
        
        
    }

    public function addSpec(Request $request){

              session_start();
    if((session()->has('access'))){
        $id = session()->get('id');

        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;


        $certiid =  $request->certiid;
        $spec = $request->spec;

        $query = "INSERT INTO `medical_speciality_doctor_mapped`(`id`, `medical_speciality_id`, `doctor_id`, `certiid`) 
        VALUES (null,$spec,$docid,$certiid)";
        DB::select($query);
        return redirect()->route('Doctor.index');
    }
    else{
        return redirect()->route('login');
    }


         
        

    }

    public function language(){

              session_start();
    if((session()->has('access'))){

        $id = session()->get('id');
        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;

        $msdm ="SELECT l.*,lm.* FROM  languages l JOIN languages_dr_mapped lm  ON l.id=lm.languageid AND lm.doctor_id=$docid";
        $msdm1 ="SELECT * FROM  languages ";
        $data = DB::select($msdm);
        $data1 = DB::select($msdm1);
    
        $already_there = array();
        $final = array();
        $dis = array();

        
        foreach($data as $item1){
            array_push($already_there, $item1->languageid);
        }
        
        foreach($data1 as $item){
            
            if(in_array( $item->id ,$already_there )){
                array_push($dis, $item);
            }
            else{
                
                array_push($final, $item);
            }
        }

        

        return view('Doctor.language')->with('dat',array('dis'=>$dis,'final'=>$final));
    }
    else{
        return redirect()->route('login');
    }


        
    }

    public function addlang(Request $request){

              session_start();
    if((session()->has('access'))){
$id = session()->get('id');
        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;


        $query = "INSERT INTO `languages_dr_mapped`(`id`, `languageid`, `doctor_id`) 
        VALUES (null,$request->lang,$docid)";
        DB::select($query);
        return redirect()->route('Doctor.index');
        
    }
    else{
        return redirect()->route('login');
    }


        
    }


    public function awards(){

              session_start();
    if((session()->has('access'))){
return view('Doctor.awards');
    }
    else{
        return redirect()->route('login');
    }


        
        
    }

    public function awardsPOST(Request $request){
        
        session_start();
        $id = session()->get('id');
        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;


        $query = "INSERT INTO `awards_and_achievement`(`id`, `doctor_id`, `award_or_achievement`) 
        VALUES (null,$docid,'$request->Award')";
        DB::select($query);
        return redirect()->route('Doctor.index');
       
    }

    public function research(){

        session_start();
    if((session()->has('access'))){
return view('Doctor.research');
    }
    else{
        return redirect()->route('login');
    }

        
        
    }

    public function researchPOST(Request $request){
        
        session_start();
        $id = session()->get('id');
        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;


        $query = "INSERT INTO `research_and_publication`(`id`, `doctor_id`, `research_and_publication`) 
        VALUES (null,$docid,'$request->research')";
        DB::select($query);
        return redirect()->route('Doctor.index');
       
    }

    public function summary(){

              session_start();
    if((session()->has('access'))){
         
        $id = session()->get('id');
        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;
        
        $query = "SELECT * FROM doctor WHERE doctor_id=$docid";
        DB::select($query);
        $requests = DB::select($query);
        
        return view('Doctor.summary')->with('data',$requests);
    }
    else{
        return redirect()->route('login');
    }


        
       

    }

    public function summaryPOST(Request $request){
        session_start();
        $id = session()->get('id');
        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;
        
        $query = "UPDATE doctor SET summary='$request->summary' WHERE doctor_id = $docid";
        
        $requests = DB::select($query);
        
        return redirect()->route('Doctor.index');

    }


    public function hosrequst(){

              session_start();
    if((session()->has('access'))){
        
        $id = session()->get('id');
        $query = "SELECT doctor_id from doctor WHERE user_id=$id";
        $requests = DB::select($query);
        $docid = $requests[0]->doctor_id;

        $query="SELECT h.*,dr.* FROM hospital h JOIN dr_request dr  ON h.hospital_id = dr.hospital_id AND doctor_id=$docid AND dr.stat=0";
        $requests = DB::select($query);
        return view('Doctor.hosrequst')->with('data',$requests);
        
    }
    else{
        return redirect()->route('login');
    }



    }

    public function hosrequstPOST(){}
    
    public function accepthospital($docid,$hosid){

              session_start();
    if((session()->has('access'))){
        $query="SELECT h.*,dr.* FROM hospital h JOIN dr_request dr  ON h.hospital_id = dr.hospital_id AND doctor_id=$docid AND dr.stat=0 AND h.hospital_id=$hosid";
        $requests = DB::select($query);

        return view('Doctor.settiming')->with('data',array('docid'=>$docid,'hosid'=>$hosid,'details'=>$requests));
    }
    else{
        return redirect()->route('login');
    }


        

    }


    public function rejecthospital($docid,$hosid){

              session_start();
    if((session()->has('access'))){
        

        $query = "UPDATE dr_request SET stat=2 WHERE doctor_id = $docid AND hospital_id=$hosid";
        
        $requests = DB::select($query);
        
        return redirect()->route('Doctor.hosrequst');
    }
    else{
        return redirect()->route('login');
    }

    }

    public function settimings(Request $request){

              session_start();
    if((session()->has('access'))){
        
        $hosid =  $request->hosid;
        $docid = $request->docid;

        
        $query = "UPDATE dr_request SET stat=1 WHERE doctor_id = $docid AND hospital_id=$hosid";
        // $requests = DB::select($query);

        $query1 = "INSERT INTO `dr_timings`(`id`, `doctor_id`, `hospital_id`, `monin`, `monout`, `tuesin`, `tuesout`, `wedin`, `wedout`, `thurin`, `thurout`, `friin`, `friout`, `satin`, `satout`, `sunin`, `sunout`) 
        VALUES (null,$docid,$hosid,'$request->mon1','$request->mon2','$request->tue1','$request->tue2','$request->wed1','$request->wed2','$request->thu1','$request->thu2','$request->fri1','$request->fri2','$request->sat1','$request->sat2','$request->sun1','$request->sun2')";

        
        DB::select($query);
        DB::select($query1);

        return redirect()->route('Doctor.hosrequst');
    }
    else{
        return redirect()->route('login');
    }



    }

    public function ahc(){

              session_start();
    if((session()->has('access'))){
        
        $role = session()->get('id');
        $query10 = "SELECT * from doctor WHERE user_id=$role";
        $requests10 = DB::select($query10);
        $uid = $requests10[0]->user_id;  
        $did = $requests10[0]->doctor_id;  
        

        $query = "SELECT u.*, h.*,d.*,dr.*,dt.*
            FROM users u JOIN hospital h JOIN doctor d JOIN dr_request dr  JOIN dr_timings dt
            WHERE u.role_id=2 AND u.auth=1 AND h.hospital_id=dt.hospital_id AND d.doctor_id=dr.doctor_id AND 
            dr.hospital_id=h.hospital_id AND d.user_id=u.user_id AND dr.stat=1 AND dt.hospital_id=dt.hospital_id 
            AND dt.doctor_id=d.doctor_id AND d.doctor_id=$did AND u.user_id =$uid";
            $requests = DB::select($query);
    
            
        


        return view('Doctor.ahc')->with('data',$requests);
    }
    else{
        return redirect()->route('login');
    }


    }

    public function removeHospital($docid,$hosid){

              session_start();
    if((session()->has('access'))){
         $query = "UPDATE dr_request SET stat=3 WHERE doctor_id = $docid AND hospital_id=$hosid";
        $requests = DB::select($query);
        return redirect()->route('Doctor.ahc');
    }
    else{
        return redirect()->route('login');
    }


       
    }

}
