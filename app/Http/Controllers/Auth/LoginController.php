<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 1) {
                return redirect()->route('admin.home');
            }elseif (auth()->user()->role == null && auth()->user()->area == 1) {
               return redirect()->route('user.home.area1');
            }elseif (auth()->user()->role == null && auth()->user()->area == 2) {
               return redirect()->route('user.home.area2');
            }elseif (auth()->user()->role == null && auth()->user()->area == 3) {
               return redirect()->route('user.home.area3');
            }elseif (auth()->user()->role == null && auth()->user()->area == 4) {
               return redirect()->route('user.home.area4');
            }
        }else{
            return redirect()->route('login')->with('error','Username And Password Are Wrong.');
        }    
    }
}
