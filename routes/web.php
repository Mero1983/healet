<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontpages;
use App\Http\Controllers\About;
use App\Http\Controllers\Shop;
use App\Http\Controllers\Index;
use App\Http\Controllers\Blog;


// Route::get('/', function () {
//     return view('test');
// });

route::get('/',[Frontpages::class,'home'])->name('home');
route::get('about/',[About::class,'about'])->name('about');
route::get('shop/',[Shop::class,'shop'])->name('shop');
route::get('index/',[Index::class,'index'])->name('index');
route::get('blog/',[blog::class,'blog'])->name('blog');




