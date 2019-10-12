<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;   
class ADMIN extends Controller
{
    public function index(){
        session_start();
    if((session()->has('access'))){
        return view('admin.index');
    }
    else{
        return redirect()->route('login');
    }

    }





    public function verifyhospital(){
        

        session_start();
    if((session()->has('access'))){
$values = DB::select("SELECT * FROM hospital WHERE verified = 0");
        return view('admin.verify')->with('values',$values); 
    }
    else{
        return redirect()->route('login');
    }
        
    }




        
    

    public function viewDoc1($path)
    {


        session_start();
    if((session()->has('access'))){
        $fpath = storage_path($path);
        return Response::make(file_get_contents($fpath), 200, [
                'Content-Type'
            => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$path.'"'
            ]);
    }
    else{
        return redirect()->route('login');
    }
        
    }



        
    
    public function viewDoc2($path)
    {


        session_start();
    if((session()->has('access'))){
        
        $fpath = storage_path($path);
        return Response::make(file_get_contents($fpath), 200, [
                'Content-Type'
            => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$path.'"'
            ]);
    }
    else{
        return redirect()->route('login');
    }
        
    }



    

    public function acceptHospital($id,$hosid)
    {


        session_start();
    if((session()->has('access'))){
 DB::statement("UPDATE hospital SET verified=1 WHERE hospital_id=$hosid");
        $query2 = "UPDATE users SET auth = 1 WHERE user_id = $id";
        DB::select($query2);            
        $query3 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,1,0,0,0)";
        $query4 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,2,0,0,0)";
        $query5 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,3,0,0,0)";
        $query6 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,4,0,0,0)";
        $query7 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,5,0,0,0)";
        $query8 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,6,0,0,0)";
        $query9 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,7,0,0,0)";
        $query10 = "INSERT INTO `roomcount`(`id`, `hospital_id`, `room_type`, `ccount`,`price`,`Available`) VALUES (null,$hosid,8,0,0,0)";
        DB::select($query3);
        DB::select($query4);
        DB::select($query5);
        DB::select($query6);
        DB::select($query7);
        DB::select($query8);
        DB::select($query9);
        DB::select($query10);
        
        $query3 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,1,0)";
        $query4 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,2,0)";
        $query5 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,3,0)";
        $query6 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,4,0)";
        $query7 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,5,0)";
        $query8 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,6,0)";
        $query9 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,7,0)";
        $query10 = "INSERT INTO `specialization_of_hospital_mapped`(`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES (null,$hosid,8,0)";
        DB::select($query3);
        DB::select($query4);
        DB::select($query5);
        DB::select($query6);
        DB::select($query7);
        DB::select($query8);
        DB::select($query9);
        DB::select($query10);

        return redirect()->route('verifyhospital');
    }
    else{
        return redirect()->route('login');
    }
        
    }



       
        
    

    public function rejectHospital($id,$hosid)
    {


        session_start();
    if((session()->has('access'))){
            $query2 = "UPDATE users SET auth = 0 WHERE user_id = $id";
        DB::select($query2);            
        DB::statement("UPDATE hospital SET verified=2 WHERE hospital_id=$hosid");
        return redirect()->route('verifyhospital');
    }
    else{
        return redirect()->route('login');
    }
        
    }



    
    

    
    public function verifydoctor(){
        


        session_start();
    if((session()->has('access'))){
        
        $query="SELECT u.*,d.* FROM users u JOIN doctor d  ON u.user_id = d.user_id AND u.auth=2";
        $requests = DB::select($query);
        return view('admin.verifydoctor')->with('values',$requests); 
    }
    else{
        return redirect()->route('login');
    }
        
    }



    
    

    public function acceptDoctor($docid,$userid){



        session_start();
    if((session()->has('access'))){
        
        $query2 = "UPDATE users SET auth = 1 WHERE user_id = $userid";
        DB::select($query2);      
        return redirect()->route('verifydoctor');   
    }
    else{
        return redirect()->route('login');
    }
        
    }


   
    
    
    public function rejectDoctor($docid,$userid){


        session_start();
    if((session()->has('access'))){
$query2 = "UPDATE users SET auth = 3 WHERE user_id = $userid";
        DB::select($query2);            
        return redirect()->route('verifydoctor');
    }
    else{
        return redirect()->route('login');
    }
        
    }



        
    

    public function verifypharmacy(){


        session_start();
    if((session()->has('access'))){
         
        $query="SELECT u.*,d.* FROM users u JOIN pharmacy d  ON u.user_id = d.manager_id AND u.auth=2 ";
        $requests = DB::select($query);
        return view('admin.verifypharmacy')->with('values',$requests); 
    }
    else{
        return redirect()->route('login');
    }
        
    }


       
    
    

    public function acceptPharmacy($pharmacyid,$userid){


        session_start();
    if((session()->has('access'))){
          $query2 = "UPDATE users SET auth = 1 WHERE user_id = $userid";
        DB::select($query2);      
        DB::statement("UPDATE pharmacy SET verified=1 WHERE pharmacy_id=$pharmacyid");
        

        return redirect()->route('verifypharmacy');  
    }
    else{
        return redirect()->route('login');
    }
        
    }



          
    
    
    public function rejectPharmacy($pharmacyid,$userid){


        session_start();
    if((session()->has('access'))){
        
        $query2 = "UPDATE users SET auth = 3 WHERE user_id = $userid";
        DB::select($query2);            
        return redirect()->route('verifypharmacy');   
    }
    else{
        return redirect()->route('login');
    }
        
    }


   
    

    public function verifyBloodBank(){


        session_start();
    if((session()->has('access'))){
          $query="SELECT u.*,d.* FROM users u JOIN bloodbank d  ON u.user_id = d.manager_id AND u.auth=2 ";
        $requests = DB::select($query);
        return view('admin.verifyb')->with('values',$requests); 
    }
    else{
        return redirect()->route('login');
    }
        
    


        
      
    }
    

    public function acceptBloodBank($bloodbank,$userid){


        session_start();
    if((session()->has('access'))){
         $query2 = "UPDATE users SET auth = 1 WHERE user_id = $userid";
        DB::select($query2);      
        DB::statement("UPDATE bloodbank SET verified=1 WHERE bloodbank_id=$bloodbank");
        

        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,1,$bloodbank,0)";
        DB::select($query);      
        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,2,$bloodbank,0)";
        DB::select($query);      
        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,3,$bloodbank,0)";
        DB::select($query);      
        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,4,$bloodbank,0)";
        DB::select($query);      
        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,5,$bloodbank,0)";
        DB::select($query);      
        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,6,$bloodbank,0)";
        DB::select($query);      
        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,7,$bloodbank,0)";
        DB::select($query);      
        $query = "INSERT INTO `blood_map`(`id`, `bloodtype_id`, `bloodbank_id`, `quantity`) 
        VALUES (null,8,$bloodbank,0)";
        DB::select($query);      

        return redirect()->route('verifyBloodBank'); 
    }
    else{
        return redirect()->route('login');
    }
        
    }


            
    
    
    public function rejectBloodBank($bloodbank,$userid){


        session_start();
    if((session()->has('access'))){
        $query2 = "UPDATE users SET auth = 3 WHERE user_id = $userid";
        DB::select($query2);            
        return redirect()->route('verifyBloodBank');   
    }
    else{
        return redirect()->route('login');
    }
        
    }



           
    


    // session_start();
    // if((session()->has('access'))){

    // }
    // else{
    //     return redirect()->route('login');
    // }
        
    // }

    

}
