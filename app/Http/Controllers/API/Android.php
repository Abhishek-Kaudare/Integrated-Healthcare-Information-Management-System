<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Config;
use Response;
use Carbon;
use Illuminate\Support\Facades\Input;
use DB;
class Android extends Controller
{
    


    public function allhospital(){    
        $response = DB::select("SELECT u.*, h.* FROM users u JOIN hospital h ON u.user_id = h.manager_id AND u.auth=1 AND h.verified=1");       
        return Response::json($response);
    }

    public function allpharmacy(){       
        $response = DB::select("SELECT u.*,d.* FROM users u JOIN pharmacy d  ON u.user_id = d.manager_id AND u.auth=1 AND d.verified=1");       
        return Response::json($response);
    }

    public function allbloodbank(){      
        $response = DB::select("SELECT u.*,d.* FROM users u JOIN bloodbank d  ON u.user_id = d.manager_id AND u.auth=1 AND d.verified=1");       
        return Response::json($response);
    }

    public function alldoctors(){        
        $response = DB::select("SELECT u.*,d.* FROM users u JOIN doctor d  ON u.user_id = d.user_id AND u.auth=1");       
        return Response::json($response);
    }

    public function alltypesofdoctor(){ 
        $response = DB::select("SELECT * FROM medical_speciality");       
        return Response::json($response);
    }

    // public function specifictypeofdoctors($typeid){
    //     $response = DB::select("SELECT ms.*,d.*,msp.* FROM medical_speciality ms JOIN doctor d JOIN medical_speciality_doctor_mapped msp ON ms.medical_speciality_id=msp.medical_speciality_id AND d.doctor_id=msp.doctor_id AND ms.medical_speciality_id=$typeid");       
    //     return Response::json($response);
    // }

   public function alltypesofhospital(){
        $response = DB::select("SELECT * FROM hostype");       
        return Response::json($response);
   }
   public function specifictypeofhospital($typeid){
        $response = DB::select("SELECT h.*,ht.*,hm.* FROM hospital h JOIN hostype ht JOIN hostype_map_hos hm ON h.hospital_id=hm.hospital_id AND hm.hostype_id=ht.id AND ht.id=$typeid");
        return Response::json($response);
   }
   public function ihsopital($typeid){
       $response = DB::select("SELECT u.*, h.* FROM users u JOIN hospital h ON u.user_id = h.manager_id AND u.auth=1 AND h.verified=1 AND h.hospital_id=$typeid");       
        return Response::json($response);
   }
   public function ibloodbank($typeid){
    $response = DB::select("SELECT u.*, b.* FROM users u JOIN bloodbank b ON u.user_id = b.manager_id AND u.auth=1 AND b.verified=1 AND b.bloodbank_id=$typeid");       
     return Response::json($response);
    }
    public function ipharmacy($typeid){
        $response = DB::select("SELECT u.*, p.* FROM users u JOIN pharmacy p ON u.user_id = p.manager_id AND u.auth=1 AND p.verified=1 AND p.pharmacy_id=$typeid");       
         return Response::json($response);
        }

        public function idoctor($typeid){
            $response = DB::select("SELECT u.*, d.* FROM users u JOIN doctor d ON u.user_id = d.user_id AND u.auth=1 AND d.doctor_id=$typeid");       
             return Response::json($response);
        }
        public function speciality($typeid){
            $response = DB::select("SELECT u.*, d.*, m.*, mm.* FROM users u JOIN doctor d JOIN medical_speciality m JOIN medical_speciality_doctor_mapped mm ON u.user_id = d.user_id AND d.doctor_id = mm.doctor_id AND m.medical_speciality_id = mm.medical_speciality_id  AND  u.auth=1 AND m.medical_speciality_id = $typeid");       
             return Response::json($response);
        }
    
    public function bedavail($typeid){
        $response = DB::select("SELECT h.*, rt.*, rc.* FROM hospital h JOIN roomcount rc JOIN room_type rt ON h.hospital_id=rc.hospital_id AND rc.room_type=rt.id AND h.hospital_id=$typeid");       
        return Response::json($response);
    }

    public function mriavail($typeid){
        $response = DB::select("SELECT h.*, s.*, sm.* FROM hospital h JOIN specialization_of_hospital_mapped sm JOIN specialization_of_hospital s ON s.id=sm.specialization_of_hospital_id AND sm.hospital_id=h.hospital_id AND h.hospital_id=$typeid");       
        return Response::json($response);
    }

    public function sendhosreview($hosid,$email,$reviews,$star){
        $query10 = "SELECT user_id from users WHERE email='$email'";
        $requests10 = DB::select($query10);
        $id = $requests10[0]->user_id;
        $mytime = Carbon\Carbon::now();
        $current_date_time = $mytime->toDateTimeString();
        $query10 = "INSERT INTO `reviews`(`id`, `hospital_id`, `user_id`, `review`, `stars`, `whenn`) 
        VALUES (null,$hosid,$id,'$reviews','$star','$current_date_time')";
        $requests10 = DB::select($query10);
        return Response::json($requests10);


    }

    public function getreview($hosid){
        $response = DB::select("SELECT u.*, r.* FROM users u JOIN reviews r ON u.user_id=r.user_id AND r.hospital_id=$hosid");       
        return Response::json($response);
    }

    public function senddrreview($hosid,$email,$reviews,$star){
        $query10 = "SELECT user_id from users WHERE email='$email'";
        $requests10 = DB::select($query10);
        $id = $requests10[0]->user_id;
        $mytime = Carbon\Carbon::now();
        $current_date_time = $mytime->toDateTimeString();
        $query10 = "INSERT INTO `reviews_dr`(`id`, `doctor_id`, `user_id`, `review`, `stars`, `whenn`) 
        VALUES (null,$hosid,$id,'$reviews','$star','$current_date_time')";
        $requests10 = DB::select($query10);
        return Response::json($requests10);

        
    }
    public function getreviewdr($hosid){
        $response = DB::select("SELECT u.*, r.* FROM users u JOIN reviews_dr r ON u.user_id=r.user_id AND r.doctor_id=$hosid");       
        return Response::json($response);
    }
    

}
