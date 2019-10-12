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
use DB;
class WebAuth extends Controller
{
    public function getAccessToken($request){
          $client = new Client();
                $response = $client->request('POST', 'http://manipal.com/api/log', [
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
        return view('admin_pages.auth.login');
    }
}


    
    public function registerpage(){

    session_start();
    if((session()->has('access'))){
        
    return Redirect::route('home');
    }
    else{
        return view('admin_pages.auth.register');
    }

        
    }
    public function home(){

    session_start();
    if((session()->has('access'))){
  
    $userid = session()->get('id');
    
    $query = "SELECT * from users WHERE user_id=$userid";
    $requests = DB::select($query);
    $role = $requests[0]->role_id;
    
    if($role==2){
        return redirect()->route('Doctor.index');
    }

    if($role==3){
        return redirect()->route('hospital.index');
    }

    if($role==4){
        return redirect()->route('Pharmacy.index');
    }

    if($role==5){
        return redirect()->route('BloodBank.index');
    }

    if($role==6){
        return redirect()->route('admin.index');
    }

    }
    else{
        return redirect()->route('login');
        return view('admin_pages.auth.login');
    }
    }


    public function login(Request $request){
        // var_dump(Hash::check('test', $hash));
        //  $password = bcrypt($request->password);

        
        // Auth::attempt([
        //     'email' => $request->email,
        //     'password'=> $request->password,])
        
         if(User::where('email', '=', $request->email)->count() > 0)
            {   
                $user = User::where('email', $request->email)->first();                
                if(Hash::check($request->password, $user->password)){                    
                    if($user->generaluser()){
                        $data = WebAuth::getAccessToken($request);
                        $data1[] =  (array) $data;
                        // $access_token = ($data1[0]['original']['data']['data']['access_token']);
                        // $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                        Session::put('access', '123');
                        // Session::put('refresh', $refresh_token);
                        Session::put('role', $user->role_id);
                        Session::put('id', $user->user_id);

                        // return redirect()->route('hospital.index');
                    }

                    if($user->hospital()){
                        $data = WebAuth::getAccessToken($request);
                        $data1[] =  (array) $data;
                        
                        // $access_token = ($data1[0]['original']['data']['data']['access_token']);
                        // $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                        Session::put('access', '123');
                        // Session::put('refresh', $refresh_token);
                        Session::put('role', $user->role_id);
                        Session::put('id', $user->user_id);
                        return redirect()->route('hospital.index');
                    }

                    if($user->admin()){
                        $data = WebAuth::getAccessToken($request);
                        $data1[] =  (array) $data;
                        // $access_token = ($data1[0]['original']['data']['data']['access_token']);
                        // $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                        Session::put('access', '123');
                        // Session::put('refresh', $refresh_token);
                        Session::put('role', $user->role_id);
                        Session::put('id', $user->user_id);
                        return redirect()->route('admin.index');
                    }
                    if($user->doctor()){
                        $data = WebAuth::getAccessToken($request);
                        $data1[] =  (array) $data;
                        // $access_token = ($data1[0]['original']['data']['data']['access_token']);
                        // $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                        Session::put('access', '123');
                        // Session::put('refresh', $refresh_token);
                        Session::put('role', $user->role_id);
                        Session::put('id', $user->user_id);
                        return redirect()->route('Doctor.index');
                    }

                    if($user->pharmacy()){
                        $data = WebAuth::getAccessToken($request);
                        $data1[] =  (array) $data;
                        // $access_token = ($data1[0]['original']['data']['data']['access_token']);
                        // $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                        Session::put('access', '123');
                        // Session::put('refresh', $refresh_token);
                        Session::put('role', $user->role_id);
                        Session::put('id', $user->user_id);
                        return redirect()->route('Pharmacy.index');
                    }
                    
                    if($user->blood()){
                        $data = WebAuth::getAccessToken($request);
                        $data1[] =  (array) $data;
                        // $access_token = ($data1[0]['original']['data']['data']['access_token']);
                        // $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                        Session::put('access', '123');
                        // Session::put('refresh', $refresh_token);
                        Session::put('role', $user->role_id);
                        Session::put('id', $user->user_id);
                        return redirect()->route('BloodBank.index');
                    }





                    // if($user->is_admin()){
                    //     $data = WebAuth::getAccessToken($request);
                    //     $data1[] =  (array) $data;
                    //     $access_token = ($data1[0]['original']['data']['data']['access_token']);
                    //     $refresh_token = ($data1[0]['original']['data']['data']['refresh_token']);
                    //     Session::put('access', $access_token);
                    //     Session::put('refresh', $refresh_token);
                    //     return redirect()->route('home');
                    // }
                }
                else{
                    return "Wrong Password";
                }
            }
            else{
                return "User does not exist";
            }
    }


    public function register(Request $request){
        
         $client = new Client();
                $response = $client->request('POST', 'http://manipal.com/api/register', [
                    'form_params' => [
                        'email' => $request->email,
                        'password' => $request->password,
                        'name' => $request->name,
                        'role_id' => $_POST["radioBlock"],
                        'auth' => 0
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

















