<?php
use Carbon\Carbon;

function getLastRecord(){
   $last_record = DB::table('slicing_data_area1')->select('*')
      ->latest('date_generated', 'desc')
      ->get();

   foreach ($last_record as $record) {
      if($record->data_stored == 0){
         return true;
      } else {
         return false;
      }
   }
}

function getSlicingData(){
   $slicing_data = DB::table('slicing_data_area1')->select('*')
      ->where(['data_stored'=>0])
      ->get();
   return $slicing_data;
}

function getShift(){
   $now  = Carbon::now('Asia/Manila');
   $time = $now->format('H:A');
   if ($time == "17:PM" || $time == "18:PM" || $time == "19:PM" || $time == "20:PM" || $time == "21:PM" || $time == "22:PM" || $time == "23:PM" || $time == "24:AM" || $time == "01:AM" || $time == "02:AM" || $time == "03:AM" || $time == "04:AM") {
      return "F";
   } else {
      return "E";
   }
}

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

function dataGetter(){
   $get_plan = DB::table('slicing_data_area1')
   ->where([
       'data_stored' => 0
   ])->get();

   return $get_plan;
}

function getEshiftLatest(){
   $get_e_latest = DB::table('slicing_data_area1')->orderBy('id','desc')
   ->where([
      'shift'  => 'E'
   ])->limit(1)->get();

   return $get_e_latest;
}

function getFshiftLatest(){
   $get_e_latest = DB::table('slicing_data_area1')->orderBy('id','desc')
   ->where([
      'shift'  => 'F'
   ])->limit(1)->get();

   return $get_e_latest;
}
