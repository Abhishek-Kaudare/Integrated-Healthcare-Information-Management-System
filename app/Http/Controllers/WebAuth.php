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
        return view('login');
    }
    public function registerpage(){
        return view('register');
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
                Session::put('access', 'YES');
                return view('home');
                return WebAuth::getAccessToken($request);

            }
            if($user->is_admin()){
                Session::put('access', 'YES');
                $_SESSION['access'] = 'yes';
                return view('home');
                return WebAuth::getAccessToken($request);
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
                
        return view('login');

    }
}