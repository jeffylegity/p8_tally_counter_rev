<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonPageController extends Controller
{
   public function slicingCommonPageArea1(){
      return view('pages.user.slicing_common_area1');
   }

   public function slicingCommonPageArea2(){
      return view('pages.user.slicing_common_area2');
   }

   public function slicingCommonPageArea3(){
      return view('pages.user.slicing_common_area3');
   }

   public function slicingCommonPageArea4(){
      return view('pages.user.slicing_common_area4');
   }
}
