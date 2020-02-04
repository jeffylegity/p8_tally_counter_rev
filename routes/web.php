<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MyCustomAuthController@authChecker');
Route::get('slicing/common/area1','CommonPageController@slicingCommonPageArea1')->name('slicing.common.area1');
Route::get('slicing/common/area2','CommonPageController@slicingCommonPageArea2')->name('slicing.common.area2');
Route::get('slicing/common/area3','CommonPageController@slicingCommonPageArea3')->name('slicing.common.area3');
Route::get('slicing/common/area4','CommonPageController@slicingCommonPageArea4')->name('slicing.common.area4');
Route::get('clear_cache','OptController@clearCache')->name('cache.clear');
Route::get('increment/{col_selector}/{machine_no}/{type}/{area}/{model}', 'UserController@incData')->name('inc_data');
Route::get('decrement/{col_selector}/{machine_no}/{type}/{area}/{model}', 'UserController@decData')->name('dec_data');

Auth::routes([
   'register' => false,
   'verify'   => false,
   'reset'    => false,
]);

//role == 1
//route for admin
Route::group(['middleware' => ['is_admin']], function () {
   //home page
   Route::get('admin/home/area1', 'HomeController@adminHome')->name('admin.home');
   //area 1
   Route::get('admin/slicing/records/area1', 'AdminController@showRecordsArea1')->name('admin.records.area1');
   Route::get('admin/slicing/logs/area1/{input_id}', 'AdminController@showLogsArea1')->name('admin.logs.area1');
   Route::get('admin/slicing/models/area1', 'AdminController@showModelsArea1')->name('admin.models.area1');
   Route::post('admin/slicing/update_model_name/area1', 'AdminController@updateModelNameArea1')->name('admin.update_model_name.area1');
   Route::post('admin/slicing/update_plan/area1', 'AdminController@updatePlanArea1')->name('admin.update_plan.area1');
   Route::get('admin/generate_record/area1', 'AdminController@generateSlicingRecordArea1')->name('admin.generate_record.area1');
   Route::get('admin/save_record/area1{data_id}', 'AdminController@saveDataArea1')->name('admin.save_record.area1');
   //area 2
   Route::get('admin/area2', 'HomeController@adminHomeArea2')->name('admin.area2');
   Route::get('admin/slicing/records/area2', 'AdminController@showRecordsArea2')->name('admin.records.area2');
   Route::get('admin/slicing/logs/area2/{input_id}', 'AdminController@showLogsArea2')->name('admin.logs.area2');
   Route::get('admin/slicing/models/area2', 'AdminController@showModelsArea2')->name('admin.models.area2');
   Route::post('admin/slicing/update_model_name/area2', 'AdminController@updateModelNameArea2')->name('admin.update_model_name.area2');
   Route::post('admin/slicing/update_plan/area2', 'AdminController@updatePlanArea2')->name('admin.update_plan.area2');
   Route::get('admin/generate_record/area2', 'AdminController@generateSlicingRecordArea2')->name('admin.generate_record.area2');
   Route::get('admin/save_record/area2/{data_id}', 'AdminController@saveDataArea2')->name('admin.save_record.area2');
   // //area 3
   // Route::get('admin/slicing-input', 'HomeController@adminHome')->name('admin.home');
   // Route::get('admin/slicing/records', 'AdminController@showRecords')->name('admin.records');
   // Route::get('admin/slicing/logs/{input_id}', 'AdminController@showLogs')->name('admin.logs');
   // Route::get('admin/slicing/models', 'AdminController@showModels')->name('admin.models');
   // Route::post('admin/slicing/update_model_name', 'AdminController@updateModelName')->name('admin.update_model_name');
   // Route::post('admin/slicing/update_plan', 'AdminController@updatePlan')->name('admin.update_plan');
   // Route::get('admin/generate_record', 'AdminController@generateSlicingRecord')->name('admin.generate_record');
   // Route::get('admin/save_record/{data_id}', 'AdminController@saveData')->name('admin.save_record');
   // //area 4
   // Route::get('admin/slicing-input', 'HomeController@adminHome')->name('admin.home');
   // Route::get('admin/slicing/records', 'AdminController@showRecords')->name('admin.records');
   // Route::get('admin/slicing/logs/{input_id}', 'AdminController@showLogs')->name('admin.logs');
   // Route::get('admin/slicing/models', 'AdminController@showModels')->name('admin.models');
   // Route::post('admin/slicing/update_model_name', 'AdminController@updateModelName')->name('admin.update_model_name');
   // Route::post('admin/slicing/update_plan', 'AdminController@updatePlan')->name('admin.update_plan');
   // Route::get('admin/generate_record', 'AdminController@generateSlicingRecord')->name('admin.generate_record');
   // Route::get('admin/save_record/{data_id}', 'AdminController@saveData')->name('admin.save_record');
   
   
   
});

//role == null
//area 1
Route::group(['middleware' => ['is_area1']], function () {
   Route::get('user/slicing-input/area1', 'HomeController@userHomeArea1')->name('user.home.area1');
});

//role == null
//area 2
Route::group(['middleware' => ['is_area2']], function () {
   Route::get('user/slicing-input/area2', 'HomeController@userHomeArea2')->name('user.home.area2');
});

//role == null
//area 3
Route::group(['middleware' => ['is_area3']], function () {
   Route::get('user/slicing-input/area3', 'HomeController@userHomeArea3')->name('user.home.area3');
});

//role == null
//area 4
Route::group(['middleware' => ['is_area4']], function () {
   Route::get('user/slicing-input/area4', 'HomeController@userHomeArea4')->name('user.home.area4');
});




