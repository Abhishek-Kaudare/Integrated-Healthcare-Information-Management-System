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

    public function specifictypeofdoctors($typeid){
        $response = DB::select("SELECT ms.*,d.*,msp.* FROM medical_speciality ms JOIN doctor d JOIN medical_speciality_doctor_mapped msp ON ms.medical_speciality_id=msp.medical_speciality_id AND d.doctor_id=msp.doctor_id AND ms.medical_speciality_id=$typeid");       
        return Response::json($response);
    }

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
            $response = DB::select("SELECT u.*, d.*, m.*, mm.* FROM users u JOIN doctor d JOIN medical_spciality m JOIN medical_spciality_doctor_mapped mm ON u.user_id = d.user_id AND d.doctor_id = mm.doctor_id AND m.doctor_speciality_id = mm.doctor_speciality_id  AND  u.auth=1 AND d.doctor_id = $typeid");       
             return Response::json($response);
        }
    
    

}
