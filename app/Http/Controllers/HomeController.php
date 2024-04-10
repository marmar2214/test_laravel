<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        // echo "Hello Laravel";
        return view('index');//view/resource/welcome.blade.php
    }
}
