<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IsItQuizDay;

use App\Subtext;

class HomeController extends Controller
{
    public function index(){
        $check = IsItQuizDay::today(true);
        $type = $check ? 'yes' : 'no';

        $subtext = Subtext::where('type', $type)->inRandomOrder()->first();

        return view('home')->with('check', $check)->with('subtext', $subtext);
    }
}
