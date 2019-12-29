<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonPageController extends Controller
{
   public function slicingCommonPage(){
      return view('pages.user.slicing_common');
   }
}
