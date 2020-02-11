<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //redirect route for users per area
    public function userHomeArea1()
    {
      return view('pages.user.area1_home');
    }
    public function userHomeArea2()
    {
      return view('pages.user.area2_home');
    }
    public function userHomeArea3()
    {
      return view('pages.user.area3_home');
    }
    public function userHomeArea4()
    {
      return view('pages.user.area4_home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //redirect route for admin
    public function adminHome()
    {
      return view('pages.admin.admin_home')->with([
            'slicing_data' =>getLatestArea1()
            ]);
    }

    public function adminHomeArea2()
    {
      return view('pages.admin.area2.admin_home')->with([
            'slicing_data' =>getLatestArea2()
            ]);
    }

    public function adminHomeArea3()
    {
      return view('pages.admin.area3.admin_home')->with([
            'slicing_data' =>getLatestArea3()
            ]);
    }

    public function adminHomeArea4()
    {
      return view('pages.admin.area4.admin_home')->with([
            'slicing_data' =>getLatestArea4()
            ]);
    }
}
