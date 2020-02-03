<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyCustomAuthController extends Controller
{
   public function authChecker(){
      
      if (Auth::check()) {

         if (auth()->user()->role == null) {
            switch (auth()->user()->area) {
               
               case 1:
                  return redirect()->route('user.home.area1');
                  break;
               
               case 2:
                  return redirect()->route('user.home.area2');
                  break;

               case 3:
                  return redirect()->route('user.home.area3');
                  break;

               case 4:
                  return redirect()->route('user.home.area4');
                  break;
            }
         } elseif (auth()->user()->role == 1) {

            return redirect()->route('admin.home');

         } 
         
      } else {

         return view('auth.login');

      }
   }
}
