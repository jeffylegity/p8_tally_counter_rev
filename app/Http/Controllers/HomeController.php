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
      //   if(getLastRecord() == true){
            return view('pages.user.area1_home')->with([
               //  'last_record'  =>true,
                'slicing_data' =>getLatestArea1()
                ]);
      //   } else {
      //       return view('pages.user.user_home')->with(['last_record'=>false]);
      //   }

    }
    public function userHomeArea4()
    {
      //   if(getLastRecord() == true){
            return view('pages.user.area1_home')->with([
               //  'last_record'  =>true,
                'slicing_data' =>getLatestArea1()
                ]);
      //   } else {
      //       return view('pages.user.user_home')->with(['last_record'=>false]);
      //   }

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminHome()
    {
      //   if(getLastRecord() == true){
            return view('pages.admin.admin_home')->with([
               //  'last_record'  =>true,
                'slicing_data' =>getLatestArea1()
                ]);
         // } else {
         //    return view('pages.admin.admin_home')->with(['last_record'=>false]);
         // }
    }

    public function adminHomeArea2()
    {
      //   if(getLastRecord() == true){
            return view('pages.admin.area2.admin_home')->with([
               //  'last_record'  =>true,
                'slicing_data' =>getLatestArea2()
                ]);
         // } else {
         //    return view('pages.admin.admin_home')->with(['last_record'=>false]);
         // }
    }

    public function adminHomeArea3()
    {
      //   if(getLastRecord() == true){
            return view('pages.admin.area3.admin_home')->with([
               //  'last_record'  =>true,
                'slicing_data' =>getLatestArea3()
                ]);
         // } else {
         //    return view('pages.admin.admin_home')->with(['last_record'=>false]);
         // }
    }

    public function adminHomeArea4()
    {
      //   if(getLastRecord() == true){
            return view('pages.admin.area4.admin_home')->with([
               //  'last_record'  =>true,
                'slicing_data' =>getLatestArea4()
                ]);
         // } else {
         //    return view('pages.admin.admin_home')->with(['last_record'=>false]);
         // }
    }
}
