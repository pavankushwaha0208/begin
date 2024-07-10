<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function home() 
    {    
         return view("home");
    }

    public function about() 
    {    
         return view("about");
    }

    public function form() 
    {    
         return view("form");
    }

    public function register(Request $request) 
    {    
         echo "<pre>";
         print_r($request->all());
    }
}
