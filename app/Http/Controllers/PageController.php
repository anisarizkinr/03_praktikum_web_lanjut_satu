<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Produk;

class PageController extends Controller
{
   

    public function home(){
        $data = Produk::all();
        return view('blog.home', ['title' => 'Home', 'isi' => $data]);
    }

    public function product(){
        return view('blog.product', ['title' => 'Product']);
    }

    public function contact(){
        return view('blog.contact', ['title' => 'Contact-Us']);
    }

    public function about(){
        return view('blog.about', ['title' => 'About Us']);
    }















    
    public function header(){
        return view('blog.header');
    }

    public function footer(){
        return view('blog.footer');
    }

    

}