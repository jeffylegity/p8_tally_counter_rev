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
Route::get('increment/{col_selector}/{machine_no}/{type}', 'UserController@incData')->name('inc_data');
Route::get('decrement/{col_selector}/{machine_no}/{type}', 'UserController@decData')->name('dec_data');

Auth::routes([
   'register' => false,
   'verify'   => false,
   'reset'    => false,
]);

//role == 1
//route for admin
Route::group(['middleware' => ['is_admin']], function () {
   Route::get('admin/slicing-input', 'HomeController@adminHome')->name('admin.home');
   Route::get('admin/slicing/records', 'AdminController@showRecords')->name('admin.records');
   Route::get('admin/slicing/logs/{input_id}', 'AdminController@showLogs')->name('admin.logs');
   Route::get('admin/slicing/models', 'AdminController@showModels')->name('admin.models');
   Route::post('admin/slicing/update_model_name', 'AdminController@updateModelName')->name('admin.update_model_name');
   Route::post('admin/slicing/update_plan', 'AdminController@updatePlan')->name('admin.update_plan');
   Route::get('admin/generate_record', 'AdminController@generateSlicingRecord')->name('admin.generate_record');
   Route::get('admin/save_record/{data_id}', 'AdminController@saveData')->name('admin.save_record');
   
});

//role == null
//route for requestor
Route::group(['middleware' => ['is_user']], function () {
   Route::get('user/slicing-input', 'HomeController@userHome')->name('user.home');
});




