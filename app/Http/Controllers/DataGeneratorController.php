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
  
}
