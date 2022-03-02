<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function home()
    {
        return view('blog.home');
    }

    public function product()
    {

        
        //  $product = ['baju','sepatu','kemeja','sendal','topi', 'jaket'];
        //  return view('product', ['product' => $product]);

        $data = array('barang' => 'sepatu',
                        'warna' => 'putih'    
        );
            return view('blog.product', $data);
    }

   
   public function news($id){
       return view('blog.news',['id' => $id]);
   }

   public function Program(){
       
       return view('blog.program')
                    ->with('program', 'pendidikan')
                    ->with('karir' , 'dosen');
   }

public function about(){
    return view('blog.about');
}

public function contact(){
    return view('blog.contact');
}

}
