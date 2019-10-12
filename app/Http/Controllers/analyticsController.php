<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\Analytics;
use Response;
use File;

class analyticsController extends Controller
{
  public function home(){
  
    $query = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.disease = 'Dengue' ";
  
    $data = DB::select($query);
    
    $array = [['Ward', 'Number Of Cases'],['A',0], ['B',0], ['C',0], ['D',0], ['E',0], ['FN',0], ['FS',0], ['GN',0], ['GS',0], ['HE',0], ['HW',0], ['KE',0],
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
    

    $query1 = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.disease = 'Dengue' ";
    
    $data1 = DB::select($query1);

    $array1 = [['Month', 'Number Of Cases'],['January',0],['February',0],['March',0],['April',0],['May',0],['June',0],['July',0],['August',0],['September',0],['October',0],['November',0],['December',0]];

    foreach ($array1 as $key1 => $value1) {
      foreach($data1 as $key => $value)
      {
        if ($value->month == $value1[0]) {
            // echo $value1[0];
            $value1[1] += $value->number;
            // echo $value1[1];
        }
      
      }
      $array1[$key1][1] = $value1[1];
    }
    
    $query2 = "SELECT *  FROM chart_demo AS c WHERE c.disease = 'Dengue' ";
    
    $data2 = DB::select($query2);

    $array2 = [['Year', 'Number Of Cases'],['2017',23345],['2018',26789]];

    
    
    $query3 = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.region = 'H' AND c.disease = 'Dengue' ";
    
    $data3 = DB::select($query3);

    $array3 = [['Month', 'Number Of Cases'],['January',711],['February',500],['March',895],['April',790],['May',600],['June',1255],['July',1901],['August',2600],['September',1236],['October',1398],['November',708],['December',589]];

    $query4 = "SELECT *  FROM chart_demo AS c WHERE c.region = 'H' AND c.disease = 'Dengue' ";
    
    $data4 = DB::select($query4);

    $array4 = [['Year', 'Number Of Cases'],['2017',3345],['2018',6789]];

    foreach ($array4 as $key1 => $value1) {
      foreach($data4 as $key => $value)
      {
        if ($value->year == $value1[0]) {
            
            $value1[1] += $value->number;
            
        }
      
      }
      $array4[$key1][1] = $value1[1];
    }
    return view('visual.home')->with('disease', array("regionYear"=>json_encode($array),"disMonth"=>json_encode($array1),"disYear"=>json_encode($array2),"regMonth"=>json_encode($array3),"regYear"=>json_encode($array4)));
  }
  
  public function diseaseMonth($type,$year,$disease){

    $query = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.disease = 'Dengue' ";
    
    $data = DB::select($query);

    $array = [['month', 'Number Of Cases'],['January',0],['February',0],['March',0],['April',0],['May',0],['June',0],['July',0],['August',0],['September',0],['October',0],['November',0],['December',0]];

    foreach ($array as $key1 => $value1) {
      foreach($data as $key => $value)
      {
        if ($value->month == $value1[0]) {
            
            $value1[1] += $value->number;
            
        }
      
      }
      $array[$key1][1] = $value1[1];
    }
    
    return view('visual.line')->with('disease', array("regionYear"=>json_encode($array),"disMonth"=>json_encode($array1),"disYear"=>json_encode($array2),"regMonth"=>json_encode($array3),"regYear"=>json_encode($array4)));
    
}
}