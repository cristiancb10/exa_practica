<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomerController extends Controller
{
    public function index(){
        return view('home');
    }
}
