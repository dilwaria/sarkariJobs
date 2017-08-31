<?php

namespace App\Services;

use App\Statelist;
use App\EducationList;
use App\JobCategoryList;
use App\JobProfile;

use DB;
use App;

class AdminService{
	public function __construct(){
		
	}

	public function getJobProfile($jobProfileID){
		if(!$jobProfileID){
			return NULL;
		}
		$jobProfile= JobProfile::where('id','=',$jobProfileID)->first();
		if(!$jobProfile){
			return NULL;
		}

		$tagArr=[];
		// foreach ($quiz->tags as $t){
		// 	$tagArr[]=$t->tagName;
		// }
		// $quiz->tagList= implode(",",$tagArr);

		return $jobProfile;
	}

	public function saveJobProfile($jobProfile,$tags,$jobProfileID){
		$q= $this->handleJobProfileUpdate($jobProfile,$jobProfileID);
		$q->tags()->detach();
        foreach ($tags as $tempTags) {
        	$t= $this->handleTags($tempTags);
        	$q->tags()->save($t);
        }
	}


	private function handleJobProfileUpdate($jobProfile,$jobProfileID){
		if($jobProfileID){
			$jp= $this->getJobProfile($jobProfileID);
			$jp->createFromArray($jobProfile);
			unset($jp->tagList);
	        $jp->save();
		}else{
			$jp= new JobProfile();
	        $jp= $jp->createFromArray($jobProfile);
	        $res=$jp->save();
    	}
    	return $jp;
	}

	private function handleTags($tempTags){
		if($t=Tags::where('tagName','=',$tempTags['tagName'])->first()){
			return $t;
		}
    	$t= new Tags();
        $t= $t->createFromArray($tempTags);
        return $t;
	}



}
