<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function about(){
        $title="about";
        return view('about',compact('title'));
}
}
