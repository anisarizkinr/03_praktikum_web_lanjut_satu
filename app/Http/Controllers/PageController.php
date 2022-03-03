<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function home(){
        return view('blog.home');
    }

    public function product(){
        return view('blog.product');
    }

    public function contact(){
        return view('blog.contact');
    }

    public function about(){
        return view('blog.about');
    }


    public function header(){
        return view('blog.header');
    }

    public function footer(){
        return view('blog.footer');
    }

    

}