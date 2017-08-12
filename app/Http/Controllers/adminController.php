<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    // /adminInterface
    public function adminInterface(){
        // $blogID= Request::input('blogID');
        $password = 'fuckjob';
        $blog=null;
        // $blog=$this->blogService->getBlog($blogID);
        if($password== 'fuckjob'){
            // $tagArr=NULL;
            // if($blog){
            //     $tagArr= $blog->tags;
            // }
            return view('adminInterface.admin',['blog'=>$blog]);
        }else{
            abort(404);
            
        }
    }
}
