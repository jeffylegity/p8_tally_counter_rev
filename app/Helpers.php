<?php
use Carbon\Carbon;

//Slicing Area 1
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getLatestArea1(){
   $get_latest_area1 = DB::table('slicing_data_area1')->orderBy('id','desc')
   ->limit(1)->get();

   return $get_latest_area1;
}

function getEshiftLatestArea1(){
   $get_e_latest = DB::table('slicing_data_area1')->orderBy('id','desc')
   ->where([
      'shift'  => 'E'
   ])->limit(1)->get();

   return $get_e_latest;
}

function getFshiftLatestArea1(){
   $get_f_latest = DB::table('slicing_data_area1')->orderBy('id','desc')
   ->where([
      'shift'  => 'F'
   ])->limit(1)->get();

   return $get_f_latest;
}

//Slicing Area 2
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getLatestArea2(){
   $get_latest_area2 = DB::table('slicing_data_area2')->orderBy('id','desc')
   ->limit(1)->get();

   return $get_latest_area2;
}

function getEshiftLatestArea2(){
   $get_e_latest = DB::table('slicing_data_area2')->orderBy('id','desc')
   ->where([
      'shift'  => 'E'
   ])->limit(1)->get();

   return $get_e_latest;
}

function getFshiftLatestArea2(){
   $get_f_latest = DB::table('slicing_data_area2')->orderBy('id','desc')
   ->where([
      'shift'  => 'F'
   ])->limit(1)->get();

   return $get_f_latest;
}

//Slicing Area 3
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getLatestArea3(){
   $get_latest_area3 = DB::table('slicing_data_area3')->orderBy('id','desc')
   ->limit(1)->get();

   return $get_latest_area3;
}

function getEshiftLatestArea3(){
   $get_e_latest = DB::table('slicing_data_area3')->orderBy('id','desc')
   ->where([
      'shift'  => 'E'
   ])->limit(1)->get();

   return $get_e_latest;
}

function getFshiftLatestArea3(){
   $get_f_latest = DB::table('slicing_data_area3')->orderBy('id','desc')
   ->where([
      'shift'  => 'F'
   ])->limit(1)->get();

   return $get_f_latest;
}

//Slicing Area 4
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getLatestArea4(){
   $get_latest_area4 = DB::table('slicing_data_area4')->orderBy('id','desc')
   ->limit(1)->get();

   return $get_latest_area4;
}

function getEshiftLatestArea4(){
   $get_e_latest = DB::table('slicing_data_area4')->orderBy('id','desc')
   ->where([
      'shift'  => 'E'
   ])->limit(1)->get();

   return $get_e_latest;
}

function getFshiftLatestArea4(){
   $get_f_latest = DB::table('slicing_data_area4')->orderBy('id','desc')
   ->where([
      'shift'  => 'F'
   ])->limit(1)->get();

   return $get_f_latest;
}

//Get Shift function
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getShift(){
   $now  = Carbon::now('Asia/Manila');
   $time = $now->format('H:A');
   if ($time == "17:PM" || $time == "18:PM" || $time == "19:PM" || $time == "20:PM" || $time == "21:PM" || $time == "22:PM" || $time == "23:PM" || $time == "24:AM" || $time == "01:AM" || $time == "02:AM" || $time == "03:AM" || $time == "04:AM") {
      return "F";
   } else {
      return "E";
   }
}

//Area 1Model name getter function
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getSL166ModelName(){
   $sl166_model_name = DB::table('slicing_model')->select('*')
      ->where(['id'=>1])
      ->get();
   foreach ($sl166_model_name as $model) {
      $var = $model->model_name;
      return $var;
   }
}

function getSL167ModelName(){
   $sl167_model_name = DB::table('slicing_model')->select('*')
      ->where(['id'=>2])
      ->get();
   foreach ($sl167_model_name as $model) {
      return $model->model_name;
   }
}

function getSL168ModelName(){
   $sl168_model_name = DB::table('slicing_model')->select('*')
      ->where(['id'=>3])
      ->get();
   foreach ($sl168_model_name as $model) {
      return $model->model_name;
   }
}

function getSL169ModelName(){
   $sl169_model_name = DB::table('slicing_model')->select('*')
      ->where(['id'=>4])
      ->get();
   foreach ($sl169_model_name as $model) {
      return $model->model_name;
   }
}

function getSL170ModelName(){
   $sl170_model_name = DB::table('slicing_model')->select('*')
      ->where(['id'=>5])
      ->get();
   foreach ($sl170_model_name as $model) {
      return $model->model_name;
   }
}

// function getLastRecord(){
//    $last_record = DB::table('slicing_data_area1')->select('*')
//       ->latest('date_generated', 'desc')
//       ->get();

//    foreach ($last_record as $record) {
//       if($record->data_stored == 0){
//          return true;
//       } else {
//          return false;
//       }
//    }
// }

// function getSlicingData(){
//    $slicing_data = DB::table('slicing_data_area1')->select('*')
//       ->where(['data_stored'=>0])
//       ->get();
//    return $slicing_data;
// }

// function dataGetter(){
//    $get_plan = DB::table('slicing_data_area1')
//    ->where([
//        'data_stored' => 0
//    ])->get();

//    return $get_plan;
// }














