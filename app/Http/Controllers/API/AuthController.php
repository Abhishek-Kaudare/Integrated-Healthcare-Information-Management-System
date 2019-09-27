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

class AuthController extends Controller
{
    public function register(Request $request){
        
        if (User::where('email', '=', $request->email)->count() > 0) {
                        $data = [[
            "message"=> "User Exists",            
        ]]; 
        
        return Response::json($data,200);           
        }
        
        

        $mytime = Carbon\Carbon::now();
        $current_date_time = $mytime->toDateTimeString();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->first_name = "";
        $user->middle_name = "";
        $user->last_name = "";
        $user->created_at = $current_date_time;
        $user->address = "";
        $user->phone = "";
        $user->gmail_user = 0;
        $user->city = "";
        $user->state = "";
        $user->pincode = "";
        $user->auth = 0;
        $user->save();
        $data = [[
            "message"=> "SUCCESS",            
        ]
    ];

        return Response::json($data, 200);
    }
    public function hello(Request $request){
        return response(['data' => "hello"]);

    }


    public function login(Request $request){

        $client = new Client();
                $response = $client->request('POST', 'http://manipal.com/oauth/token', [
                    'form_params' => [
                        'grant_type' => 'password',
                        'client_id' => '8',
                        'client_secret' => 'zvVnTf1pT0U5dP6gnpMdeDjhc6uPMuomOuuWsC8D',
                        'username' => $request->username,
                        'password' => $request->password,
                        
                    ],
                    'headers' =>[
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ]

                ]);
                
        return response(['data' => json_decode((string) $response->getBody()->getContents(),true)]);

    }

}
