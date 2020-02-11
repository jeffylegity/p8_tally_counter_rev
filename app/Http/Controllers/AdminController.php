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
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea1(Request $request){
   $update_model_name = DB::table('slicing_model_area1')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area1');
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
         'models'       => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea2(Request $request){
   $update_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area2');
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

//area 3
//---------------------------------------------------------------------------------------------------------------------------------------------------
   public function generateSlicingRecordArea3(){
      $data = array(
         'sl182_actual'        =>0,
         'sl182_target'        =>0,
         'sl182_test_block'    =>0,

         'sl183_actual'        =>0,
         'sl183_target'        =>0,
         'sl183_test_block'    =>0,

         'sl185_actual'        =>0,
         'sl185_target'        =>0,
         'sl185_test_block'    =>0,

         'sl186_actual'        =>0,
         'sl186_target'        =>0,
         'sl186_test_block'    =>0,

         'lap20_actual'        =>0,
         'lap20_target'        =>0,
         'lap20_test_block'    =>0,

         'lap23_actual'        =>0,
         'lap23_target'        =>0,
         'lap23_test_block'    =>0,

         'lap27_actual'        =>0,
         'lap27_target'        =>0,
         'lap27_test_block'    =>0,

         'bc8_actual'        =>0,
         'bc8_target'        =>0,
         'bc8_test_block'    =>0,

         'bc9_actual'        =>0,
         'bc9_target'        =>0,
         'bc9_test_block'    =>0,

         'bc12_actual'        =>0,
         'bc12_target'        =>0,
         'bc12_test_block'    =>0,
         
         'date_generated'    =>now(),
         'shift'             =>getShift(),
         'data_stored'       =>0
      );

      $generate_record = DB::table('slicing_data_area3')
         ->insert($data);
         
      if (!$generate_record) {
         return redirect()->route('admin.area3');
      } else {
         return redirect()->route('admin.area3');
      }
   }

   public function saveDataArea3($data_id){
   $save_record = DB::table('slicing_data_area3')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }

   }

   public function showRecordsArea3(){
   $records = DB::table('slicing_data_area3')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area3.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea3($input_id){
   $logs = DB::table('slicing_logs_area3')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area3.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea3(){
   $models = DB::table('slicing_model_area3')->select('*')
      ->get();
      return view('pages.admin.area3.admin_models')
      ->with([
         'models'       => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea3(Request $request){
   $update_model_name = DB::table('slicing_model_area3')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area3');
      } else {
         toastr()->success('Model name updated');
         return redirect()->back();
      }
   }

   public function updatePlanArea3(Request $request){
   $update_plan = DB::table('slicing_data_area3')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl182_target'=>$request->input('sl182_target'),
         'sl183_target'=>$request->input('sl183_target'),
         'sl185_target'=>$request->input('sl185_target'),
         'sl186_target'=>$request->input('sl186_target'),
         'lap20_target'=>$request->input('lap20_target'),
         'lap23_target'=>$request->input('lap23_target'),
         'lap27_target'=>$request->input('lap27_target'),
         'bc8_target'=>$request->input('bc8_target'),
         'bc9_target'=>$request->input('bc9_target'),
         'bc12_target'=>$request->input('bc12_target'),
      ]);

      if (!$update_plan) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }
   }

//area 4
//---------------------------------------------------------------------------------------------------------------------------------------------------
   public function generateSlicingRecordArea4(){
      $data = array(
         'sl193_actual'        =>0,
         'sl193_target'        =>0,
         'sl193_test_block'    =>0,

         'sl194_actual'        =>0,
         'sl194_target'        =>0,
         'sl194_test_block'    =>0,

         'sl195_actual'        =>0,
         'sl195_target'        =>0,
         'sl195_test_block'    =>0,

         'sl196_actual'        =>0,
         'sl196_target'        =>0,
         'sl196_test_block'    =>0,

         'sl197_actual'        =>0,
         'sl197_target'        =>0,
         'sl197_test_block'    =>0,

         'sl198_actual'        =>0,
         'sl198_target'        =>0,
         'sl198_test_block'    =>0,

         'sl199_actual'        =>0,
         'sl199_target'        =>0,
         'sl199_test_block'    =>0,

         'sl200_actual'        =>0,
         'sl200_target'        =>0,
         'sl200_test_block'    =>0,

         'bc7_actual'        =>0,
         'bc7_target'        =>0,
         'bc7_test_block'    =>0,

         'csl1_actual'        =>0,
         'csl1_target'        =>0,
         'csl1_test_block'    =>0,
         
         'date_generated'    =>now(),
         'shift'             =>getShift(),
         'data_stored'       =>0
      );

      $generate_record = DB::table('slicing_data_area4')
         ->insert($data);
         
      if (!$generate_record) {
         return redirect()->route('admin.area4');
      } else {
         return redirect()->route('admin.area4');
      }
   }

   public function saveDataArea4($data_id){
   $save_record = DB::table('slicing_data_area4')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }

   }

   public function showRecordsArea4(){
   $records = DB::table('slicing_data_area4')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area4.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea4($input_id){
   $logs = DB::table('slicing_logs_area4')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area4.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea4(){
   $models = DB::table('slicing_model_area4')->select('*')
      ->get();
      return view('pages.admin.area4.admin_models')
      ->with([
         'models'       => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea4(Request $request){
   $update_model_name = DB::table('slicing_model_area4')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area4');
      } else {
         toastr()->success('Model name updated');
         return redirect()->back();
      }
   }

   public function updatePlanArea4(Request $request){
   $update_plan = DB::table('slicing_data_area4')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl193_target'=>$request->input('sl193_target'),
         'sl194_target'=>$request->input('sl194_target'),
         'sl195_target'=>$request->input('sl195_target'),
         'sl196_target'=>$request->input('sl196_target'),
         'sl197_target'=>$request->input('sl197_target'),
         'sl198_target'=>$request->input('sl198_target'),
         'sl199_target'=>$request->input('sl199_target'),
         'sl200_target'=>$request->input('sl200_target'),
         'bc7_target'=>$request->input('bc7_target'),
         'csl1_target'=>$request->input('csl1_target'),
      ]);

      if (!$update_plan) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }
   }
}
