<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserFormController extends Controller{
   public function generateRecord(){
      $data = array(
         'sl1_actual'        =>0,
         'sl1_target'        =>0,
         'sl1_test_block'    =>0,
         'sl2_actual'        =>0,
         'sl2_target'        =>0,
         'sl2_test_block'    =>0,
         'sl3_actual'        =>0,
         'sl3_target'        =>0,
         'sl3_test_block'    =>0,
         'sl4_actual'        =>0,
         'sl4_target'        =>0,
         'sl4_test_block'    =>0,
         'sl5_actual'        =>0,
         'sl5_target'        =>0,
         'sl5_test_block'    =>0,
         'date_generated'    =>now(),
         'shift'             =>getShift(),
         'data_stored'       =>0
      );

      $generate_record = DB::table('slicing_data')
         ->insert($data);
         
      if (!$generate_record) {
         toastr()->error('Error, Please Contact MIS');
         return redirect()->route('user.home');
      } else {
         toastr()->success('Record Generated');
         return redirect()->route('user.home');
      }
   }

   public function incData($col_selector){
      $fetch = DB::table('slicing_data')->select($col_selector)->first();
         foreach ($fetch as $data) {
            $data_inc      = $data+1;
            $update_data   = DB::table('slicing_data')->update([
               $col_selector => $data_inc,
            ]);
            if (!$update_data) {
               toastr::error('Error');
               return redirect()->route('user.home');
            } else {
               return redirect()->route('user.home');
            }
         }
   }

   public function decData($col_selector){
      $fetch = DB::table('slicing_data')->select($col_selector)->first();
         foreach ($fetch as $data) {
            $data_dec      = $data-1;
            $update_data   = DB::table('slicing_data')->update([
               $col_selector => $data_dec,
            ]);
            if (!$update_data) {
               toastr::error('Error');
               return redirect()->route('user.home');
            } else {
               return redirect()->route('user.home');
            }
         }
   }
}
 