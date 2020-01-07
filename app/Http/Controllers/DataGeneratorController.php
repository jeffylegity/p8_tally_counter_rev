<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataGeneratorController extends Controller
{
    public function generateSlicingRecord(){
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
           return redirect()->route('admin.home');
        } else {
           toastr()->success('Record Generated');
           return redirect()->route('admin.home');
        }
     }

     public function saveData($data_id){
         $save_record = DB::table('slicing_data')->select('*')
         ->where(['id'=>$data_id])
         ->update(['data_stored'=>1]);

         if (!$save_record) {
            toastr()->error('Record not saved, Please contact MIS');
            return redirect()->back();
         } else {
            toastr()->success('Record Saved');
            return redirect()->back();
         }

     }

     public function showRecords(){
         $records = DB::table('slicing_data')->select('*')->get();
         return view('pages.admin.admin_records')
         ->with([
            'records' => $records,
         ]);
     }

     public function showLogs($input_id){
      $logs = DB::table('slicing_logs')->select('*')
      ->where(['data_id'=>$input_id])->get();
      return view('pages.admin.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
     }
     
     public function showModels(){
      $models = DB::table('slicing_model')->select('*')
      ->get();
      return view('pages.admin.admin_models')
      ->with([
         'models' => $models,
      ]);
     }

     public function updateModelName(Request $request){
      $update_model_name = DB::table('slicing_model')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

         if (!$update_model_name) {
            toastr()->error('Model name not updated, Please Contact MIS');
            return redirect()->route('admin.models');
         } else {
            toastr()->success('Model name updated');
            return redirect()->back();
         }
     }

     public function updatePlan(Request $request){
      $update_plan = DB::table('slicing_data')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl1_target'=>$request->input('sl1_target'),
         'sl2_target'=>$request->input('sl2_target'),
         'sl3_target'=>$request->input('sl3_target'),
         'sl4_target'=>$request->input('sl4_target'),
         'sl5_target'=>$request->input('sl5_target'),
         ]);

         if (!$update_plan) {
            toastr()->error('Plan not updated, Please Contact MIS');
            return redirect()->back();
         } else {
            toastr()->success('Plan updated');
            return redirect()->back();
         }
     }
}
