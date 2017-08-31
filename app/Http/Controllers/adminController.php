<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\AdminService;
use DB;
use App;
use App\User;
use Session;
use Auth;



class adminController extends Controller
{
    private $jobProfileService;

     public function __construct(AdminService $as){        
        $this->jobProfileService= $as;
        }
        
    // /adminInterface
    public function adminInterface(){
        // $blogID= Request::input('blogID');
        $password= Request::input('password');
        $jobProfile=null;
        // $blog=$this->blogService->getBlog($blogID);
        if($password== 'fuckjob'){
            // $tagArr=NULL;
            // if($blog){
            //     $tagArr= $blog->tags;
            // }
            return view('adminInterface.admin',['jobProfile'=>$jobProfile]);
        }else{
            abort(404);
            
        }
    }

    public function saveJobProfile(){
        $jobProfile= Request::input('jobProfile');
        $tags= Request::input('tags');
        $jobProfileID= Request::input('jobProfileID','');
        if(empty($tags)){
            echo "There must be at least one tag. Not inserted";
            return;
        }
        $this->jobProfileService->saveJobProfile($jobProfile,$tags,$jobProfileID);
        echo "Saved Sucessfully";
   }

}


