<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $blogs=Blog::get();
        return Blog::get();
        return view('index',compact('blogs'));
    }
    public function about(){
        
        return view('about');
    }
    public function sample_post(){
        
        return view('post');
    }
    public function contact(){
        
        return view('contact');
    }
}
