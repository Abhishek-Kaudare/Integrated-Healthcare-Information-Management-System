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
    
}
