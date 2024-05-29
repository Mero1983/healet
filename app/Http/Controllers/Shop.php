<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shop extends Controller
{
    public function shop(){
        $title="Shop";
        return view('shop',compact('title'));
    }
}
