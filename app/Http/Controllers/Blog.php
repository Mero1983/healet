<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
   public function blog(){
    $title="Blog";
    return view('blog',compact('title'));
   }
}
