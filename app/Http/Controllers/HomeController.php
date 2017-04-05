<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IsItQuizDay;

class HomeController extends Controller
{
    public function index(){
       return view('home')->with('check', IsItQuizDay::today(true));
    }
}
