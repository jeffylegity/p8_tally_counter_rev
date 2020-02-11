<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{ 
   
//Function for decrementing data
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
   public function incData($col_selector,$machine_no,$type,$area,$model){
      if ($area == '1') {
         $data_tbl_selector = 'slicing_data_area1';
         $logs_tbl_selector = 'slicing_logs_area1';
         $logs = getLatestArea1();
      } elseif ($area == '2') {
         $data_tbl_selector = 'slicing_data_area2';
         $logs_tbl_selector = 'slicing_logs_area2';
         $logs = getLatestArea2();
      } elseif ($area == '3') {
         $data_tbl_selector = 'slicing_data_area3';
         $logs_tbl_selector = 'slicing_logs_area3';
         $logs = getLatestArea3();
      } elseif ($area == '4') {
         $data_tbl_selector = 'slicing_data_area4';
         $logs_tbl_selector = 'slicing_logs_area4';
         $logs = getLatestArea4();
      }

      $fetch = DB::table($data_tbl_selector)->select($col_selector)
      ->where(['data_stored'=>0])->first();
      foreach ($fetch as $data) {
         $data_inc      = $data+1;
         $update_data   = DB::table($data_tbl_selector)->update([
            $col_selector => $data_inc,
         ]);
      }

      foreach ($logs as $log) {
         $data = array(
            'data_id'      => $log->id,
            'machine_no'   => $machine_no,
            'action'       => '+1',
            'type'         => $type,
            'model_output' => $model,
            'created_at'   => now(),
         );
         $insert_logs = DB::table($logs_tbl_selector)->insert($data);
         if (!$insert_logs) {
            tostr()->error('Data not inserted');
            return redirect()->back();
         } else {
            return redirect()->back();
         }
      }

   }

//Function for decrementing data
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
   public function decData($col_selector,$machine_no,$type,$area,$model){
      switch ($area) {
         case '1':
            $data_tbl_selector = 'slicing_data_area1';
            $logs_tbl_selector = 'slicing_logs_area1';
            $logs = getLatestArea1();
         break;

         case '2':
            $data_tbl_selector = 'slicing_data_area2';
            $logs_tbl_selector = 'slicing_logs_area2';
            $logs = getLatestArea2();
         break;

         case '3':
            $data_tbl_selector = 'slicing_data_area3';
            $logs_tbl_selector = 'slicing_logs_area3';
            $logs = getLatestArea3();
         break;

         case '4':
            $data_tbl_selector = 'slicing_data_area4';
            $logs_tbl_selector = 'slicing_logs_area4';
            $logs = getLatestArea4(); 
         break;
      }

      $fetch = DB::table($data_tbl_selector)->select($col_selector)
      ->where(['data_stored'=>0])->first();
      foreach ($fetch as $data) {
         $data_inc      = $data-1;
         $update_data   = DB::table($data_tbl_selector)->update([
            $col_selector => $data_inc,
         ]);
      }
      
      foreach ($logs as $log) {
         $data = array(
            'data_id'      => $log->id,
            'machine_no'   => $machine_no,
            'action'       => '-1',
            'type'         => $type,
            'model_output' => $model,
            'created_at'   => now(),
         );
         $insert_logs = DB::table($logs_tbl_selector)->insert($data);
         if (!$insert_logs) {
            tostr()->error('Data not inserted');
            return redirect()->back();
         } else {
            return redirect()->back();
         }
      }
   }
}
