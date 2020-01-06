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
Route::get('slicing/common','CommonPageController@slicingCommonPage')->name('slicing.common');
Route::get('clear_cache','OptController@clearCache')->name('cache.clear');
Route::get('increment/{col_selector}/{machine_no}/{type}', 'UserFormController@incData')->name('inc_data');
Route::get('decrement/{col_selector}/{machine_no}', 'UserFormController@decData')->name('dec_data');

Auth::routes([
   'register' => false,
   'verify'   => false,
   'reset'    => false,
]);

//role == 1
//route for admin
Route::group(['middleware' => ['is_admin']], function () {
   Route::get('admin/slicing-input', 'HomeController@adminHome')->name('admin.home');
   Route::get('admin/slicing/records', 'DataGeneratorController@showRecords')->name('admin.records');
   Route::get('admin/slicing/logs/{input_id}', 'DataGeneratorController@showLogs')->name('admin.logs');
   Route::get('admin/generate_record', 'DataGeneratorController@generateSlicingRecord')->name('admin.generate_record');
   Route::get('admin/save_record/{data_id}', 'DataGeneratorController@saveData')->name('admin.save_record');
   
});

//role == null
//route for requestor
Route::group(['middleware' => ['is_user']], function () {
   Route::get('user/slicing-input', 'HomeController@userHome')->name('user.home');
});




