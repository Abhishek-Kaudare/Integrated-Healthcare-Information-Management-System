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
    // 2017 = '2017';
    // 'Dengue' = "Dengue";
    // 'H' = 'A';
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

    // foreach ($array2 as $key1 => $value1) {
    //   foreach($data2 as $key => $value)
    //   {
    //     if ($value->month == $value1[0]) {
    //         // echo $value1[0];
    //         $value1[1] += $value->number;
    //         // echo $value1[1];
    //     }
      
    //   }
    //   $array2[$key1][1] = $value1[1];
    // }
    
    $query3 = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.region = 'H' AND c.disease = 'Dengue' ";
    
    $data3 = DB::select($query3);

    $array3 = [['Month', 'Number Of Cases'],['January',711],['February',500],['March',895],['April',790],['May',600],['June',1255],['July',1901],['August',2600],['September',1236],['October',1398],['November',708],['December',589]];

    // foreach ($array3 as $key1 => $value1) {
    //   foreach($data3 as $key => $value)
    //   {
    //     if ($value->month == $value1[0]) {
    //         // echo $value1[0];
    //         $value1[1] += $value->number;
    //         // echo $value1[1];
    //     }
      
    //   }
    //   $array3[$key1][1] = $value1[1];
    // }
    // dd($array3);
    // die();
    $query4 = "SELECT *  FROM chart_demo AS c WHERE c.region = 'H' AND c.disease = 'Dengue' ";
    
    $data4 = DB::select($query4);

    $array4 = [['Year', 'Number Of Cases'],['2017',3345],['2018',6789]];

    foreach ($array4 as $key1 => $value1) {
      foreach($data4 as $key => $value)
      {
        if ($value->year == $value1[0]) {
            // echo $value1[0];
            $value1[1] += $value->number;
            // echo $value1[1];
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
    return view('visual.line')->with('disease', array("regionYear"=>json_encode($array),"disMonth"=>json_encode($array1),"disYear"=>json_encode($array2),"regMonth"=>json_encode($array3),"regYear"=>json_encode($array4)));
    // if ($type == 'bar') {
    //   return view('visual.bar')->with('disease', json_encode($array));
    // } elseif ($type == 'pie') {
    //   return view('visual.pie')->with('disease', json_encode($array));
    // } else {
    //   return view('visual.line')->with('disease', json_encode($array));
    // }
    
    
  }

  // public function diseaseYear($type, 'Dengue'){

  //   $query = "SELECT *  FROM chart_demo AS c WHERE c.disease = 'Dengue' ";
  
  //   $data = DB::select($query);
  //   $array = [['month', 'Number Of Cases'],['2017',0],['2018',0]];
  //   foreach ($array as $key1 => $value1) {
  //     foreach($data as $key => $value)
  //     {
  //       if ($value->year == $value1[0]) {
  //           $value1[1] += $value->number;
  //       }
  //     }
  //     $array[$key1][1] = $value1[1];
  //   }
  //   return view('demo.dashboard')->with('disease', json_encode($array));
  // }

  // public function diseaseLocMonth(2017,'Dengue','H'){

  //   $query = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.region = 'H' AND c.disease = 'Dengue' ";
    
  //   $data = DB::select($query);

  //   $array = [['month', 'Number Of Cases'],['January',0],['February',0],['March',0],['April',0],['May',0],['June',0],['July',0],['August',0],['September',0],['October',0],['November',0],['December',0]];

  //   foreach ($array as $key1 => $value1) {
  //     foreach($data as $key => $value)
  //     {
  //       if ($value->month == $value1[0]) {
  //           // echo $value1[0];
  //           $value1[1] += $value->number;
  //           // echo $value1[1];
  //       }
      
  //     }
  //     $array[$key1][1] = $value1[1];
  //   }
  //   // print_r($array);
  //   // die();
  //   // dd($array);
  //   if ($type == 'bar') {
  //     return view('visual.bar')->with('disease', json_encode($array));
  //   } elseif ($type == 'pie') {
  //     return view('visual.pie')->with('disease', json_encode($array));
  //   } else {
  //     return view('visual.line')->with('disease', json_encode($array));
  //   }
  // }

  // public function diseaseLocYear($type,'Dengue','H'){

  //   $query = "SELECT *  FROM chart_demo AS c WHERE c.region = 'H' AND c.disease = 'Dengue' ";
    
  //   $data = DB::select($query);

  //   $array = [['month', 'Number Of Cases'],['2017',0],['2018',0]];

  //   foreach ($array as $key1 => $value1) {
  //     foreach($data as $key => $value)
  //     {
  //       if ($value->year == $value1[0]) {
  //           // echo $value1[0];
  //           $value1[1] += $value->number;
  //           // echo $value1[1];
  //       }
      
  //     }
  //     $array[$key1][1] = $value1[1];
  //   }
  //   // print_r($array);
  //   // die();
  //   // dd($array);
  //   if ($type == 'bar') {
  //     return view('visual.bar')->with('disease', json_encode($array));
  //   } elseif ($type == 'pie') {
  //     return view('visual.pie')->with('disease', json_encode($array));
  //   } else {
  //     return view('visual.line')->with('disease', json_encode($array));
  //   }
  // }

  // public function diseaseYearMap(2017, 'Dengue'){

  //   $query = "SELECT *  FROM chart_demo AS c WHERE c.year = 2017 AND c.disease = 'Dengue' ";
  
  //   $data = DB::select($query);
    
  //   $array = [['month', 'Number Of Cases'],['A',0], ['B',0], ['C',0], ['D',0], ['E',0], ['FN',0], ['FS',0], ['GN',0], ['GS',0], ['HE',0], ['HW',0], ['KE',0],
  //                ['KW',0], ['L',0], ['ME',0], ['MW',0], ['N',0], ['PN',0], ['PS',0], ['RN',0], ['RS',0], ['RC',0], ['S',0], ['T',0]];
  //   foreach ($array as $key1 => $value1) {
  //     foreach($data as $key => $value)
  //     {
  //       if ($value->region == $value1[0]) {
  //           $value1[1] += $value->number;
  //       }
  //     }
  //     $array[$key1][1] = $value1[1];
  //   }
  //   $json = (array) json_decode(file_get_contents(storage_path("MC_Wards.geojson")));
    // $json = file_get_contents(storage_path("MC_Wards.geojson"));
    // dd($json[0]);
    // dd($array);
    // die();
  //   return view('visual.map')->with('json', $json);
  // }

  // public function diseaseYearMapDemo(2017, 'Dengue'){

  //   $query = "SELECT * FROM chart_demo AS c WHERE c.year = 2017 AND c.disease = 'Dengue' ";
  
  //   $data = DB::select($query);
    
  //   $array = [['month', 'Number Of Cases'],['A',0], ['B',0], ['C',0], ['D',0], ['E',0], ['FN',0], ['FS',0], ['GN',0], ['GS',0], ['HE',0], ['HW',0], ['KE',0],
  //                ['KW',0], ['L',0], ['ME',0], ['MW',0], ['N',0], ['PN',0], ['PS',0], ['RN',0], ['RS',0], ['RC',0], ['S',0], ['T',0]];
  //   foreach ($array as $key1 => $value1) {
  //     foreach($data as $key => $value)
  //     {
  //       if ($value->region == $value1[0]) {
  //           $value1[1] += $value->number;
  //       }
  //     }
  //     $array[$key1][1] = $value1[1];
  //   }
  //   $json = file_get_contents(storage_path("MC_Wards.geojson"));
  //   // $array2 = json_decode($json);
  //   // // dd($json);
  //   // dd($array2->features[0]);
  //   // die();
  //   return view('demo.map')->with('json', $json);
  // }  
}