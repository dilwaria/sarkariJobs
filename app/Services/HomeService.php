<?php

namespace App\Services;

use App\Statelist;
use App\EducationList;
use App\JobCategoryList;
use DB;
use App;

class HomeService{

	public function getStateList(){
		return  Statelist::all();
	}

	public function getEducationList(){
		return  EducationList::all();
	}

	public function getJobCategoryList(){
		return  JobCategoryList::all();
	}	

}