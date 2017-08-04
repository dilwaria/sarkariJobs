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
            
        
}
