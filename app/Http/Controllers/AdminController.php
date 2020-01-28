<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function generateSlicingRecord(){
        $data = array(
           'sl166_actual'        =>0,
           'sl166_target'        =>0,
           'sl166_test_block'    =>0,

           'sl167_actual'        =>0,
           'sl167_target'        =>0,
           'sl167_test_block'    =>0,

           'sl168_actual'        =>0,
           'sl168_target'        =>0,
           'sl168_test_block'    =>0,

           'sl169_actual'        =>0,
           'sl169_target'        =>0,
           'sl169_test_block'    =>0,

           'sl170_actual'        =>0,
           'sl170_target'        =>0,
           'sl170_test_block'    =>0,

           'date_generated'    =>now(),
           'shift'             =>getShift(),
           'data_stored'       =>0
        );
  
        $generate_record = DB::table('slicing_data_area1')
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
         $save_record = DB::table('slicing_data_area1')->select('*')
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
         $records = DB::table('slicing_data_area1')
         ->orderBy('date_generated','desc')->get();
         return view('pages.admin.admin_records')
         ->with([
            'records' => $records,
         ]);
     }

     public function showLogs($input_id){
         $logs = DB::table('slicing_logs')->select('*')
         ->where(['data_id'=>$input_id])
         ->orderBy('created_at','desc')->get();
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
      $update_plan = DB::table('slicing_data_area1')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl166_target'=>$request->input('sl166_target'),
         'sl167_target'=>$request->input('sl167_target'),
         'sl168_target'=>$request->input('sl168_target'),
         'sl169_target'=>$request->input('sl169_target'),
         'sl170_target'=>$request->input('sl170_target'),
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
