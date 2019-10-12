<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\Analytics;
use Response;


class analyticsController extends Controller
{
  public function diseaseMonth($type,$year,$disease){

    $query = "SELECT *  FROM chart_demo AS c WHERE c.year = $year AND c.disease = '$disease' ";
    
    $data = DB::select($query);

    $array = [['month', 'Number Of Cases'],['January',0],['February',0],['March',0],['April',0],['May',0],['June',0],['July',0],['August',0],['September',0],['October',0],['November',0],['December',0]];

    foreach ($array as $key1 => $value1) {
      foreach($data as $key => $value)
      {
        if ($value->month == $value1[0]) {
            // echo $value1[0];
            $value1[1] += $value->number;
            // echo $value1[1];
        }
      
      }
      $array[$key1][1] = $value1[1];
    }
    // print_r($array);
    // die();
    // dd($array);
    if ($type == 'bar') {
      return view('visual.bar')->with('disease', json_encode($array));
    } elseif ($type == 'pie') {
      return view('visual.pie')->with('disease', json_encode($array));
    } else {
      return view('visual.line')->with('disease', json_encode($array));
    }
    
    
  }

  public function diseaseYear($type, $disease){

    $query = "SELECT *  FROM chart_demo AS c WHERE c.disease = '$disease' ";
  
    $data = DB::select($query);
    $array = [['month', 'Number Of Cases'],['2017',0],['2018',0]];
    foreach ($array as $key1 => $value1) {
      foreach($data as $key => $value)
      {
        if ($value->year == $value1[0]) {
            $value1[1] += $value->number;
        }
      }
      $array[$key1][1] = $value1[1];
    }
    return view('demo.dashboard')->with('disease', json_encode($array));
  }

  public function diseaseLocMonth($year,$disease,$region){

    $query = "SELECT *  FROM chart_demo AS c WHERE c.year = $year AND c.region = '$region' AND c.disease = '$disease' ";
    
    $data = DB::select($query);

    $array = [['month', 'Number Of Cases'],['January',0],['February',0],['March',0],['April',0],['May',0],['June',0],['July',0],['August',0],['September',0],['October',0],['November',0],['December',0]];

    foreach ($array as $key1 => $value1) {
      foreach($data as $key => $value)
      {
        if ($value->month == $value1[0]) {
            // echo $value1[0];
            $value1[1] += $value->number;
            // echo $value1[1];
        }
      
      }
      $array[$key1][1] = $value1[1];
    }
    // print_r($array);
    // die();
    // dd($array);
    if ($type == 'bar') {
      return view('visual.bar')->with('disease', json_encode($array));
    } elseif ($type == 'pie') {
      return view('visual.pie')->with('disease', json_encode($array));
    } else {
      return view('visual.line')->with('disease', json_encode($array));
    }
  }

  public function diseaseLocYear($type,$disease,$region){

    $query = "SELECT *  FROM chart_demo AS c WHERE c.region = '$region' AND c.disease = '$disease' ";
    
    $data = DB::select($query);

    $array = [['month', 'Number Of Cases'],['2017',0],['2018',0]];

    foreach ($array as $key1 => $value1) {
      foreach($data as $key => $value)
      {
        if ($value->year == $value1[0]) {
            // echo $value1[0];
            $value1[1] += $value->number;
            // echo $value1[1];
        }
      
      }
      $array[$key1][1] = $value1[1];
    }
    // print_r($array);
    // die();
    // dd($array);
    if ($type == 'bar') {
      return view('visual.bar')->with('disease', json_encode($array));
    } elseif ($type == 'pie') {
      return view('visual.pie')->with('disease', json_encode($array));
    } else {
      return view('visual.line')->with('disease', json_encode($array));
    }
  }

  public function diseaseYearMap($year, $disease){

    $query = "SELECT *  FROM chart_demo AS c WHERE c.year = $year AND c.disease = '$disease' ";
  
    $data = DB::select($query);
    
    $array = [['month', 'Number Of Cases'],['A',0], ['B',0], ['C',0], ['D',0], ['E',0], ['FN',0], ['FS',0], ['GN',0], ['GS',0], ['HE',0], ['HW',0], ['KE',0],
                 ['KW',0], ['L',0], ['ME',0], ['MW',0], ['N',0], ['PN',0], ['PS',0], ['RN',0], ['RS',0], ['RC',0], ['S',0], ['T',0]];
    foreach ($array as $key1 => $value1) {
      foreach($data as $key => $value)
      {
        if ($value->region == $value1[0]) {
            $value1[1] += $value->number;
        }
      }
      $array[$key1][1] = $value1[1];
    }
    $json = (array) json_decode(file_get_contents(storage_path("MC_Wards.geojson")));
    // $json = file_get_contents(storage_path("MC_Wards.geojson"));
    // dd($json[0]);
    // dd($array);
    // die();
    return view('demo.map')->with('json', $json);
  }

    
}