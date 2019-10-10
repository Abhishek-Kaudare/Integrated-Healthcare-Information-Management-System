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
        // return response(['data' => json_dencode((string) $response->getBody()->getContents(),true)]);
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

}
