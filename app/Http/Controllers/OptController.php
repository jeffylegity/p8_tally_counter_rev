<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class OptController extends Controller
{
    public function clearCache(){
        Artisan::call(
            'cache:clear',
        );
        Artisan::call(
            'view:clear',
        );
        toastr()->success('cache cleared!');
        return redirect()->back();
    }
}
