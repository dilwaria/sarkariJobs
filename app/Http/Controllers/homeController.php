<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HomeService;

class homeController extends Controller
{
	private $homeService ;

    public function __construct(HomeService $hs){
        $this->homeService= $hs;
      
    }
    // /homepage
    public function homepage(){
    	$stateList = $this->homeService->getStateList();
    	$educationList =  $this->homeService->getEducationList();
    	$jobCategoryList = $this->homeService->getJobCategoryList();
    	// var_dump($stateList);

        $params= ['stateList'=>$stateList,
        		'educationList'=>$educationList,
        		'jobCategoryList'=>$jobCategoryList];
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
