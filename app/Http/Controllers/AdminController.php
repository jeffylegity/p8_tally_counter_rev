<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
//area 1
//---------------------------------------------------------------------------------------------------------------------------------------------------
   public function generateSlicingRecordArea1(){
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

   public function saveDataArea1($data_id){
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

   public function showRecordsArea1(){
   $records = DB::table('slicing_data_area1')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area1.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea1($input_id){
   $logs = DB::table('slicing_logs_area1')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area1.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea1(){
   $models = DB::table('slicing_model_area1')->select('*')
      ->get();
      return view('pages.admin.area1.admin_models')
      ->with([
         'models' => $models,
      ]);
   }

   public function updateModelNameArea1(Request $request){
   $update_model_name = DB::table('slicing_model_area1')->select('*')
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

   public function updatePlanArea1(Request $request){
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

//area 2
//---------------------------------------------------------------------------------------------------------------------------------------------------
   public function generateSlicingRecordArea2(){
      $data = array(
         'sl156_actual'        =>0,
         'sl156_target'        =>0,
         'sl156_test_block'    =>0,

         'sl161_actual'        =>0,
         'sl161_target'        =>0,
         'sl161_test_block'    =>0,

         'sl162_actual'        =>0,
         'sl162_target'        =>0,
         'sl162_test_block'    =>0,

         'sl163_actual'        =>0,
         'sl163_target'        =>0,
         'sl163_test_block'    =>0,

         'sl164_actual'        =>0,
         'sl164_target'        =>0,
         'sl164_test_block'    =>0,

         'sl171_actual'        =>0,
         'sl171_target'        =>0,
         'sl171_test_block'    =>0,

         'sl172_actual'        =>0,
         'sl172_target'        =>0,
         'sl172_test_block'    =>0,

         'sl179_actual'        =>0,
         'sl179_target'        =>0,
         'sl179_test_block'    =>0,

         'sl180_actual'        =>0,
         'sl180_target'        =>0,
         'sl180_test_block'    =>0,

         'sl181_actual'        =>0,
         'sl181_target'        =>0,
         'sl181_test_block'    =>0,
         
         'date_generated'    =>now(),
         'shift'             =>getShift(),
         'data_stored'       =>0
      );

      $generate_record = DB::table('slicing_data_area2')
         ->insert($data);
         
      if (!$generate_record) {
         return redirect()->route('admin.area2');
      } else {
         return redirect()->route('admin.area2');
      }
   }

   public function saveDataArea2($data_id){
   $save_record = DB::table('slicing_data_area2')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }

   }

   public function showRecordsArea2(){
   $records = DB::table('slicing_data_area2')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area2.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea2($input_id){
   $logs = DB::table('slicing_logs_area2')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area2.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea2(){
   $models = DB::table('slicing_model_area2')->select('*')
      ->get();
      return view('pages.admin.area2.admin_models')
      ->with([
         'models' => $models,
      ]);
   }

   public function updateModelNameArea2(Request $request){
   $update_model_name = DB::table('slicing_model_area2')->select('*')
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

   public function updatePlanArea2(Request $request){
   $update_plan = DB::table('slicing_data_area2')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl156_target'=>$request->input('sl156_target'),
         'sl161_target'=>$request->input('sl161_target'),
         'sl162_target'=>$request->input('sl162_target'),
         'sl163_target'=>$request->input('sl163_target'),
         'sl164_target'=>$request->input('sl164_target'),
         'sl171_target'=>$request->input('sl171_target'),
         'sl172_target'=>$request->input('sl172_target'),
         'sl179_target'=>$request->input('sl179_target'),
         'sl180_target'=>$request->input('sl180_target'),
         'sl181_target'=>$request->input('sl181_target'),
      ]);

      if (!$update_plan) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }
   }
}
