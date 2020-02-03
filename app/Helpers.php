<?php
use Carbon\Carbon;
//Slicing Area 1
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getLatestArea1(){
   $get_latest_area1 = DB::table('slicing_data_area1')->orderBy('id','desc')
   ->where([
      'data_stored' => 0
   ])->limit(1)->get();

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
   ->where([
      'data_stored' => 0
   ])->limit(1)->get();

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
   ->where([
      'data_stored' => 0
   ])->limit(1)->get();

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

//Area 1 Model name getter function
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getSL166ModelName(){
   $sl166_model_name = DB::table('slicing_model_area1')->select('*')
      ->where(['id'=>1])
      ->get();
   foreach ($sl166_model_name as $model) {
      $var = $model->model_name;
      return $var;
   }
}

function getSL167ModelName(){
   $sl167_model_name = DB::table('slicing_model_area1')->select('*')
      ->where(['id'=>2])
      ->get();
   foreach ($sl167_model_name as $model) {
      return $model->model_name;
   }
}

function getSL168ModelName(){
   $sl168_model_name = DB::table('slicing_model_area1')->select('*')
      ->where(['id'=>3])
      ->get();
   foreach ($sl168_model_name as $model) {
      return $model->model_name;
   }
}

function getSL169ModelName(){
   $sl169_model_name = DB::table('slicing_model_area1')->select('*')
      ->where(['id'=>4])
      ->get();
   foreach ($sl169_model_name as $model) {
      return $model->model_name;
   }
}

function getSL170ModelName(){
   $sl170_model_name = DB::table('slicing_model_area1')->select('*')
      ->where(['id'=>5])
      ->get();
   foreach ($sl170_model_name as $model) {
      return $model->model_name;
   }
}

//Area 2 Model name getter function
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getSL156ModelName(){
   $sl156_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>1])
      ->get();
   foreach ($sl156_model_name as $model) {
      $var = $model->model_name;
      return $var;
   }
}

function getSL161ModelName(){
   $sl161_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>2])
      ->get();
   foreach ($sl161_model_name as $model) {
      return $model->model_name;
   }
}

function getSL162ModelName(){
   $sl162_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>3])
      ->get();
   foreach ($sl162_model_name as $model) {
      return $model->model_name;
   }
}

function getSL163ModelName(){
   $sl163_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>4])
      ->get();
   foreach ($sl163_model_name as $model) {
      return $model->model_name;
   }
}

function getSL164ModelName(){
   $sl164_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>5])
      ->get();
   foreach ($sl164_model_name as $model) {
      return $model->model_name;
   }
}

function getSL171ModelName(){
   $sl171_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>6])
      ->get();
   foreach ($sl171_model_name as $model) {
      $var = $model->model_name;
      return $var;
   }
}

function getSL172ModelName(){
   $sl172_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>7])
      ->get();
   foreach ($sl172_model_name as $model) {
      return $model->model_name;
   }
}

function getSL179ModelName(){
   $sl179_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>8])
      ->get();
   foreach ($sl179_model_name as $model) {
      return $model->model_name;
   }
}

function getSL180ModelName(){
   $sl180_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>9])
      ->get();
   foreach ($sl180_model_name as $model) {
      return $model->model_name;
   }
}

function getSL181ModelName(){
   $sl181_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>10])
      ->get();
   foreach ($sl181_model_name as $model) {
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
















