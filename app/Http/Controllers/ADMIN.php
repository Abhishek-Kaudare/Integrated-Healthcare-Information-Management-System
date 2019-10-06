<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;   
class ADMIN extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function verifyhospital(){
        
        $values = DB::select("SELECT * FROM hospital WHERE verified = 0");
        return view('admin.verify')->with('values',$values); 
    }

    public function viewDoc1($path)
    {
        $fpath = storage_path($path);
        return Response::make(file_get_contents($fpath), 200, [
                'Content-Type'
            => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$path.'"'
            ]);
    }

    public function viewDoc2($path)
    {
        $fpath = storage_path($path);
        return Response::make(file_get_contents($fpath), 200, [
                'Content-Type'
            => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$path.'"'
            ]);
    }

    public function acceptHospital($id,$hosid)
    {
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

    public function rejectHospital($id,$hosid)
    {
        $query2 = "UPDATE users SET auth = 0 WHERE user_id = $id";
        DB::select($query2);            
        DB::statement("UPDATE hospital SET verified=2 WHERE hospital_id=$hosid");
        return redirect()->route('verifyhospital');
    }

    
    public function verifydoctor(){
        
        $query="SELECT u.*,d.* FROM users u JOIN doctor d  ON u.user_id = d.user_id AND u.auth=2 ";
        $requests = DB::select($query);
        return view('admin.verifydoctor')->with('values',$requests); 
    }
    

    public function acceptDoctor($docid,$userid){
        $query2 = "UPDATE users SET auth = 1 WHERE user_id = $userid";
        DB::select($query2);      
        return redirect()->route('verifydoctor');      
    }
    
    public function rejectDoctor($docid,$userid){
        $query2 = "UPDATE users SET auth = 3 WHERE user_id = $userid";
        DB::select($query2);            
        return redirect()->route('verifydoctor');
    }
}
