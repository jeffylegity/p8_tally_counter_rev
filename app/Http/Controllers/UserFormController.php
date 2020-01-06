<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserFormController extends Controller{
   public function incData($col_selector,$machine_no,$type){
      $fetch = DB::table('slicing_data')->select($col_selector)
         ->where(['data_stored'=>0])->first();
         foreach ($fetch as $data) {
            $data_inc      = $data+1;
            $update_data   = DB::table('slicing_data')->update([
               $col_selector => $data_inc,
            ]);
         }
      $logs = dataGetter();
      foreach ($logs as $log) {
         $data = array(
            'data_id'      => $log->id,
            'machine_no'   => $machine_no,
            'action'       => '+1',
            'type'         => $type,
            'created_at'   => now(),
         );
         $insert_logs = DB::table('slicing_logs')->insert($data);
         if (!$insert_logs) {
            tostr()->error('Data not inserted');
            return redirect()->back();
         } else {
            return redirect()->back();
         }
      }
   }
   
   public function decData($col_selector,$machine_no,$type){
      $fetch = DB::table('slicing_data')->select($col_selector)
         ->where(['data_stored'=>0])->first();
         foreach ($fetch as $data) {
            $data_inc      = $data-1;
            $update_data   = DB::table('slicing_data')->update([
               $col_selector => $data_inc,
            ]);
         }
      $logs = dataGetter();
      foreach ($logs as $log) {
         $data = array(
            'data_id'      => $log->id,
            'machine_no'   => $machine_no,
            'action'       => '-1',
            'type'         => $type,
            'created_at'   => now(),
         );
         $insert_logs = DB::table('slicing_logs')->insert($data);
         if (!$insert_logs) {
            tostr()->error('Data not inserted');
            return redirect()->back();
         } else {
            return redirect()->back();
         }
      }
   }
}
 