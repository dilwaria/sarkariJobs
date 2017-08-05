<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    // /homepage
    public function homepage(){
        $params= [];
        return view('home.homepage',$params);
    }


    // aboutus
     public function aboutus(){
        $params= [];
        return view('home.aboutus',$params);
    }
    
    // privacy
    public function privacy(){
        $params= [];
        return view('home.privacy',$params);
    }
       
            
        
}
