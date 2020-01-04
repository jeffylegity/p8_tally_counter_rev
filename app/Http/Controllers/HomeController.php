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
    public function userHome()
    {
        if(getLastRecord() == true){
            return view('pages.user.user_home')->with([
                'last_record'  =>true,
                'slicing_data' =>getSlicingData()
                ]);
        } else {
            return view('pages.user.user_home')->with(['last_record'=>false]);
        }

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminHome()
    {
        if(getLastRecord() == true){
            return view('pages.admin.admin_home')->with([
                'last_record'  =>true,
                'slicing_data' =>getSlicingData()
                ]);
         } else {
            return view('pages.admin.admin_home')->with(['last_record'=>false]);
         }
    }
    
}
