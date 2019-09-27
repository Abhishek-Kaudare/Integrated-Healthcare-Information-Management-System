<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hospital extends Controller
{
    public function index(){
        return view('Hospital.index');
    }
}
