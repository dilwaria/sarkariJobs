<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
				 
				     <div class="leftside left_sidebar">
						<div class="latest-jobs">
							<h1>LATEST ANNOUNCEMENTS</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div class="job-content">
							
							<ul>
								<li>
									<h1>IT Department Manager</h1>
								</li>
								<li>
									<h1>IT Department Manager</h1>
								</li>
								<li>
									<h1>IT Department Manager</h1>
								</li>
								<li>
									<h1>IT Department Manager</h1>
								</li>
								<li>
									<h1>IT Department Manager</h1>
								</li>
								<li>
									<h1>IT Department Manager</h1>
								</li>
							</ul>
							<a style="padding-left: 25px;" href="">View all <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						
					</div>   
					<div class="">
						
						<div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          StateList
        </a>
      </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
           <ul class="list-unstyled">
            @foreach($stateList as $list)
												<li>
													<a href="#">{{$list['statename']}}</a>
												</li>
                        @endforeach
												
											</ul>
          </div>
        </div>
      </div>
      <!-- end of panel -->

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Education Qualification
        </a>
      </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <ul class="list-unstyled">
          
            @foreach($educationList as $list)
                        <li>
                          <a href="#">{{$list['category']}}</a>
                        </li>
                        @endforeach
                        
                      </ul>
          </div>
        </div>
      </div>
      <!-- end of panel -->

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Job Categories
        </a>
      </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
           <ul class="list-unstyled">
          
            @foreach($jobCategoryList as $list)
                        <li>
                          <a href="#">{{$list['name']}}</a>
                        </li>
                        @endforeach
                        
                      </ul>
          </div>
        </div>
      </div>
      <!-- end of panel -->

      

    </div>
					</div>	
					
					<div class="career">
						<img src="images/left-banner.jpg" title="left-banner" alt="left-banner" class="img-responsive">
					</div>
				</div>