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

function getSlModelArea1($sl_no){
   $get_model = DB::table('slicing_model_area1')->select('*')
      ->where(['id' => $sl_no])
      ->get();
   foreach ($get_model as $model) {
      return $model->model_name;
   }
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

function getSlModelArea2($sl_no){
   $get_model = DB::table('slicing_model_area2')->select('*')
      ->where(['id' => $sl_no])
      ->get();
   foreach ($get_model as $model) {
      return $model->model_name;
   }
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

function getSlModelArea3($sl_no){
   $get_model = DB::table('slicing_model_area3')->select('*')
      ->where(['id' => $sl_no])
      ->get();
   foreach ($get_model as $model) {
      return $model->model_name;
   }
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

function getSlModelArea4($sl_no){
   $get_model = DB::table('slicing_model_area4')->select('*')
      ->where(['id' => $sl_no])
      ->get();
   foreach ($get_model as $model) {
      return $model->model_name;
   }
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

//Get Models function
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
function getModels(){
   $model = DB::table('models')->select('*')->get();
   return $model;
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
















