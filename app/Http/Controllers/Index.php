<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function index(){
        $title="Index";
        return view('index',compact('title'));
    }
}
