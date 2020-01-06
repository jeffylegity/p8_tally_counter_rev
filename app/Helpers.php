<?php
use Carbon\Carbon;

function getLastRecord(){
   $last_record = DB::table('slicing_data')->select('*')
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
   $slicing_data = DB::table('slicing_data')->select('*')
      ->where(['data_stored'=>0])
      ->get();
   return $slicing_data;
}

function getShift(){
   $now  = Carbon::now('Asia/Manila');
   $time = $now->format('H');
   if ($time >= 06 && $time <= 18) {
      return "E";
   } else {
      return "F";
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
   $get_plan = DB::table('slicing_data')
   ->where([
       'data_stored' => 0
   ])->get();

   return $get_plan;
}

