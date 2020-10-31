<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    
    public function index(){
    	return view('index');
    }

// controller to about page

      public function about(){
    	return view('about');
    }


// controller to blog-details page

      public function blog_details(){
    	return view('blog-details');
    }

// controller to blog page

      public function blog(){
    	return view('blog');
    }

// controller to contact page

      public function contact(){
    	return view('contact');
    }

// controller to gallery page

      public function gallery(){
    	return view('gallery');
    }

// controller to menu page

      public function menu(){
    	return view('menu');
    }

// controller to reservation page

      public function reservation(){
    	return view('reservation');
    }

// controller to stuff page

      public function stuff(){
    	return view('stuff');
    }
}
