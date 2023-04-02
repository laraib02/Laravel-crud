<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index(){
        return view('demo');
    }
    function demo(){
        return view('welcome');
    }
}
