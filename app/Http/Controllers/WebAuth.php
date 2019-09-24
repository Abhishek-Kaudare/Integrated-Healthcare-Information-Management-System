<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Config;
use Illuminate\Support\Facades\Hash;
use Auth; 
use Cookie;
use Tracker;
use Session;
use Redirect;
class WebAuth extends Controller
{
    public function getAccessToken($request){
          $client = new Client();
                $response = $client->request('POST', 'http://manipal.com/api/login', [
                    'form_params' => [
                        'username' => $request->email,
                        'password' => $request->password,
                    ],
                    'headers' =>[
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ]

                ]);         
        return response(['data' => json_decode((string) $response->getBody()->getContents(),true)]);
        
    }


    public function loginpage(){

    session_start();
    if((session()->has('access'))){

    return Redirect::route('home');
    }
    else{
        return view('login');
    }
}


    
    public function registerpage(){

        session_start();
    if((session()->has('access'))){
        
    return Redirect::route('home');
    }
    else{
        return view('register');
    }

        
    }
    public function home(){
        return view('home');
    }


    public function login(Request $request){
         if(Auth::attempt([
            'email' => $request->email,
            'password'=> $request->password,]))
        {

            $user = User::where('email', $request->email)->first();
            
            if($user->is_student()){
                
                $data = WebAuth::getAccessToken($request);
                $data1[] =  (array) $data;
                $access_token = ($data1[0]['original']['data']['data']['access_token']);
                $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                Session::put('access', $access_token);
                Session::put('refresh', $refresh_token);
                return redirect()->route('home');
                

            }
            if($user->is_admin()){
                $data = WebAuth::getAccessToken($request);
                $data1[] =  (array) $data;
                $access_token = ($data1[0]['original']['data']['data']['access_token']);
                $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                Session::put('access', $access_token);
                Session::put('refresh', $refresh_token);
                return redirect()->route('home');
                
            }
        }
    }


    public function register(Request $request){
         $client = new Client();
                $response = $client->request('POST', 'http://manipal.com/api/register', [
                    'form_params' => [
                        'email' => $request->email,
                        'password' => $request->password,
                        'name' => $request->name,
                    ],
                    'headers' =>[
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ]

                ]);
                
             
            $data = json_decode($response->getBody());
            $data1[] =  (array) $data;
            $data2[] =  (array) $data1[0][0];
            $message = $data2[0]['message'];
            
            if($message === 'SUCCESS'){
                return redirect()->route('login');
            }
            else if($message === 'User Exists'){
                return redirect()->route('register');
            }
            
        

    }
}

















