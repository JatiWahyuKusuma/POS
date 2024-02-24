<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCareController extends Controller
{
    public function pos(){ 
        return view('homecare');
    }    //
}
