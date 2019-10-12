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




        $query = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.disease = 'Dengue' ";
  
    $data = DB::select($query);
    
    $array = [['Ward', 'Number Of Cases'],['A',0], ['B',0], ['C',0], ['D',0], ['E',0], ['FN',0], ['FS',0], ['GN',0], ['GS',0], ['HE',0], ['HW',0], ['KE',0],
                 ['KW',0], ['L',0], ['ME',0], ['MW',0], ['N',0], ['PN',0], ['PS',0], ['RN',0], ['RS',0], ['RC',0], ['S',0], ['T',0]];
    foreach ($array as $key1 => $value1) {
      foreach($data as $key => $value)
      {
        if ($value->region == $value1[0]) {
            $value1[1] += $value->number;
        }
      }
      $array[$key1][1] = $value1[1];
    }
    

    $query1 = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.disease = 'Dengue' ";
    
    $data1 = DB::select($query1);

    $array1 = [['Month', 'Number Of Cases'],['January',0],['February',0],['March',0],['April',0],['May',0],['June',0],['July',0],['August',0],['September',0],['October',0],['November',0],['December',0]];

    foreach ($array1 as $key1 => $value1) {
      foreach($data1 as $key => $value)
      {
        if ($value->month == $value1[0]) {
            // echo $value1[0];
            $value1[1] += $value->number;
            // echo $value1[1];
        }
      
      }
      $array1[$key1][1] = $value1[1];
    }
    
    $query2 = "SELECT *  FROM chart_demo AS c WHERE c.disease = 'Dengue' ";
    
    $data2 = DB::select($query2);

    $array2 = [['Year', 'Number Of Cases'],['2017',23345],['2018',26789]];

    
    
    $query3 = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.region = 'H' AND c.disease = 'Dengue' ";
    
    $data3 = DB::select($query3);

    $array3 = [['Month', 'Number Of Cases'],['January',711],['February',500],['March',895],['April',790],['May',600],['June',1255],['July',1901],['August',2600],['September',1236],['October',1398],['November',708],['December',589]];

    $query4 = "SELECT *  FROM chart_demo AS c WHERE c.region = 'H' AND c.disease = 'Dengue' ";
    
    $data4 = DB::select($query4);

    $array4 = [['Year', 'Number Of Cases'],['2017',3345],['2018',6789]];

    foreach ($array4 as $key1 => $value1) {
      foreach($data4 as $key => $value)
      {
        if ($value->year == $value1[0]) {
            
            $value1[1] += $value->number;
            
        }
      
      }
      $array4[$key1][1] = $value1[1];
    }
    return view('admin.index')->with('disease', array("regionYear"=>json_encode($array),"disMonth"=>json_encode($array1),"disYear"=>json_encode($array2),"regMonth"=>json_encode($array3),"regYear"=>json_encode($array4)));







        
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
