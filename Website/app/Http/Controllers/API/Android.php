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
use DateTime;
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

    // public function alldoctors(){   
            



    //       $response = DB::select("SELECT u.*, l.*,lm.*,d.*,ms.*,msm.*,aaa.*,rad.*
    //     FROM users u INNER JOIN languages l INNER JOIN languages_dr_mapped lm INNER JOIN doctor d
    //     JOIN medical_speciality ms JOIN medical_speciality_doctor_mapped msm JOIN awards_and_achievement aaa JOIN
    //     research_and_publication rad
    //     ON d.user_id=u.user_id AND lm.doctor_id=d.doctor_id AND lm.languageid=l.id 
    //     AND msm.doctor_id=d.doctor_id AND ms.medical_speciality_id=msm.medical_speciality_id AND
    //     d.doctor_id=rad.doctor_id AND d.doctor_id=aaa.doctor_id");
    //      $awards = array();
    //     $languages = array();
    //     $research_and_publication = array();
    //     $medical_speciality_name = array();


    //     foreach($response as $item){    
    //         if(!in_array( $item->award_or_achievement ,$awards )){
    //             array_push($awards, $item->award_or_achievement);
    //         }
    //     }
    //     foreach($response as $item){    
    //         if(!in_array( $item->languages ,$languages )){
    //             array_push($languages, $item->languages);
    //         }
    //     }
    //     foreach($response as $item){    
    //         if(!in_array( $item->research_and_publication ,$research_and_publication )){
    //             array_push($research_and_publication, $item->research_and_publication);
    //         }
    //     }
    //     foreach($response as $item){    
    //         if(!in_array( $item->medical_speciality_name ,$medical_speciality_name )){
    //             array_push($medical_speciality_name, $item->medical_speciality_name);
    //         }
    //     }        

    //     $data = array();
    //     $data = array_merge($data,array($awards));
    //     $data = array_merge($data,array($languages));
    //     $data = array_merge($data,array($research_and_publication));
    //     $data = array_merge($data,array($medical_speciality_name));
    //     $data = array_merge($data,array($response[0]));
        

    //     // $a = array('awards');
        
    //     // $c = array_combine($a, $b);

    //     json_encode($awards);
    //     dd($awards);

    //     $object = new stdClass();
    //     $object->awards = $awards;
    //     $object->languages = $languages;
    //     // $myArray[] = $object;
    //     dd($object);
        
        
    //     return Response::json($data, 200);
        
    // }

    
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

public function allhosspec(){
        $response = DB::select("SELECT * from specialization_of_hospital");       
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


    public function hospitalfilter(){
        
        
        $response = DB::select("SELECT s.*,shm.*,h.*,ht.*,htm.*
        FROM  specialization_of_hospital s INNER JOIN
        specialization_of_hospital_mapped shm JOIN hospital h
         JOIN hostype ht JOIN hostype_map_hos htm
        ON h.hospital_id=shm.hospital_id AND shm.specialization_of_hospital_id=s.id 
         AND htm.hospital_id = h.hospital_id AND htm.hostype_id=ht.id 
         
        ");       
        // AND ht.type = IFNULL('$hostype',ht.type) AND s.specialization_name = IFNULL('$spec',s.specialization_name)
             
        $already_there = array();
        $final = array();
        $dis = array();
        
        function distance($lat1, $lon1, $lat2, $lon2) {
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    

    return $dist;
      
    
  }
}


        foreach($response as $item1){
            if(!in_array( $item1->hospital_id ,$already_there )){
                array_push($already_there, $item1->hospital_id);
                array_push($final, $item1);
            }
            
        }

        foreach($final as $item){
            
            $item = json_decode(json_encode($item), True);
            $item = array_merge($item, array("dist"=>distance('19.1878575','72.945953',$item['lat'], $item['longitude'])));
            
        }


        
    
        $array = collect($final)->sortBy('dist')->toArray();

        



        return Response::json($array);
    }
        

public function docfilter(Request $request){
        $lang = $request->lang;
        $spec = $request->spec;
        
        $response = DB::select("SELECT u.*, l.*,lm.*,d.*,ms.*,msm.*
        FROM users u INNER JOIN languages l INNER JOIN languages_dr_mapped lm INNER JOIN doctor d
        JOIN medical_speciality ms JOIN medical_speciality_doctor_mapped msm
        ON d.user_id=u.user_id AND lm.doctor_id=d.doctor_id AND lm.languageid=l.id 
        AND msm.doctor_id=d.doctor_id AND ms.medical_speciality_id=msm.medical_speciality_id
        AND l.languages = IFNULL('$lang',l.languages) AND ms.medical_speciality_name = IFNULL('$spec',ms.medical_speciality_name)
        ");       
        
             
              $already_there = array();
        $final = array();
        $dis = array();


        foreach($response as $item1){
            if(!in_array( $item1->user_id ,$already_there )){
                array_push($already_there, $item1->user_id);
                array_push($final, $item1);
            }
            
        }

       



        return Response::json($final);
    }
        

    public function medavail($name,$lat,$long){
        $response = DB::select("SELECT mm.*,m.*,p.* from medicines m JOIN med_map mm JOIN pharmacy p
        on p.pharmacy_id=mm.pharmacy_id AND mm.medicine_id=m.id AND m.medicine_name='$name' AND mm.ccount>0
        ");

                

        $already_there = array();
                $final = array();
                $dis = array();
                
                function distance($lat1, $lon1, $lat2, $lon2) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        }
        else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            

            return $dist;
            
            
        }
        }


                foreach($response as $item1){
                    if(!in_array( $item1->pharmacy_id ,$already_there )){
                        array_push($already_there, $item1->pharmacy_id);
                        array_push($final, $item1);
                    }
                    
                }

                foreach($final as $item){
                    
                    $item = json_decode(json_encode($item), True);
                    $item = array_merge($item, array("dist"=>distance('19.1878575','72.945953',$item['lat'], $item['longitude'])));
                    
                }


        
    
        $array = collect($final)->sortBy('dist')->toArray();

        



        return Response::json($response);

    }



    public function docavail($hosid,$docid){
        
         $query10 = "SELECT * from attendance WHERE doctor_id='6' and hospital_id='6'";
        $requests10 = DB::select($query10);
        $val = 0;
        foreach($requests10 as $items){
            $ts=$items->date_time;

            

            $now = new DateTime();
            $l = $now->format('d-m-Y');    
            
            if(date('d-m-Y', strtotime('0 day', strtotime($ts))) == date('d-m-Y', strtotime('1 day', strtotime($l)))){
                $val=$val+1;
            }

            

        }
        if($val%2==0){
            $data = [[
            "message"=> "no",            
        ]];
        }
        else{
             $data = [[
            "message"=> "yes",            
        ]];
        }
        return Response::json($data, 200);



    }


    public function specialitydr($docid){
        //  info about single doctor
        $response = DB::select("SELECT u.*, l.*,lm.*,d.*,ms.*,msm.*,aaa.*,rad.*
        FROM users u INNER JOIN languages l INNER JOIN languages_dr_mapped lm INNER JOIN doctor d
        JOIN medical_speciality ms JOIN medical_speciality_doctor_mapped msm JOIN awards_and_achievement aaa JOIN
        research_and_publication rad
        ON d.user_id=u.user_id AND lm.doctor_id=d.doctor_id AND lm.languageid=l.id 
        AND msm.doctor_id=d.doctor_id AND ms.medical_speciality_id=msm.medical_speciality_id AND
        d.doctor_id=rad.doctor_id AND d.doctor_id=aaa.doctor_id AND d.doctor_id=$docid");

        $awards = array();
        $languages = array();
        $research_and_publication = array();
        $medical_speciality_name = array();


        foreach($response as $item){    
            if(!in_array( $item->award_or_achievement ,$awards )){
                array_push($awards, $item->award_or_achievement);
            }
        }
        foreach($response as $item){    
            if(!in_array( $item->languages ,$languages )){
                array_push($languages, $item->languages);
            }
        }
        foreach($response as $item){    
            if(!in_array( $item->research_and_publication ,$research_and_publication )){
                array_push($research_and_publication, $item->research_and_publication);
            }
        }
        foreach($response as $item){    
            if(!in_array( $item->medical_speciality_name ,$medical_speciality_name )){
                array_push($medical_speciality_name, $item->medical_speciality_name);
            }
        }        

        $data = array();
        $data = array_merge($data,array($awards));
        $data = array_merge($data,array($languages));
        $data = array_merge($data,array($research_and_publication));
        $data = array_merge($data,array($medical_speciality_name));
        $data = array_merge($data,array($response[0]));
        
       

        return Response::json($data, 200);
           
    }

    public function specialityList(){

        $data = DB::select("SELECT * from medical_speciality");

        return Response::json($data, 200);

    }

    

}
