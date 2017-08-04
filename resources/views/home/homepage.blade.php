@extends('master')

@section('content')


<!-- menu start here -->
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xs-12">
			<nav class="navbar" id="menu">
				<div class="navbar-header">
					<span class="menutext visible-xs">Menu</span>
					<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
					<ul class="nav navbar-nav pull-left">
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">HOME</a>
									
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Central Govt Jobs <span class="fa fa-angle-down"></span></a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="#">Central Govt Jobs 1</a>
												</li>
												<li>
													<a href="#">Central Govt Jobs 2</a>
												</li>
												<li>
													<a href="#">Central Govt Jobs 3</a>
												</li>
												<li>
													<a href="#">Central Govt Jobs 4</a>
												</li>
												
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">State Govt Jobs <span class="fa fa-angle-down"></span></a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="#">State Govt Jobs 1</a>
												</li>
												<li>
													<a href="#">State Govt Jobs 2</a>
												</li>
												<li>
													<a href="#">State Govt Jobs 3</a>
												</li>
												<li>
													<a href="#">State Govt Jobs 4</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Bank Jobs</a>
								</li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Teaching Jobs</a>
							    </li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">IT Jobs</a>
							    </li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Railway Jobs</a>
							    </li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Current Affairs</a>
								</li>
				    </ul>
				</div>
			</nav>	
		</div>
		<div id="job">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 form1">
				
			</div>
			<div class="row">
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
          Collapsible item #1
        </a>
      </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
           <ul class="list-unstyled">
												<li>
													<a href="#">State Govt Jobs 1</a>
												</li>
												<li>
													<a href="#">State Govt Jobs 2</a>
												</li>
												<li>
													<a href="#">State Govt Jobs 3</a>
												</li>
												<li>
													<a href="#">State Govt Jobs 4</a>
												</li>
											</ul>
          </div>
        </div>
      </div>
      <!-- end of panel -->

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible item #2
        </a>
      </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
          </div>
        </div>
      </div>
      <!-- end of panel -->

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible item #3
        </a>
      </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
          </div>
        </div>
      </div>
      <!-- end of panel -->

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Collapsible item #4
        </a>
      </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
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
				
				<div class="col-md-6 col-sm-6 col-xs-12 padd0 product-list">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
								
							<div class="matter">
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
								
							<div class="matter">
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
								
							<div class="matter">
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					
				
				</div>
				
			    <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs" >
					<div class="rightside">
						<div class="border"></div>
						<div class="search">
						<input name="s" value="" class="form-control" placeholder="Search..." type="text">
						<button type="button" class="btn" style="bottom:initial;"><i class="fa fa-search" aria-hidden="true"></i></button>
					     </div>
						<div class="latest-post">
							<h1>LATEST JOBS</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div class="job-content">
							<img src="images/p1.jpg" alt="p1" title="p1">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="images/p1.jpg" alt="p1" title="p1">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="images/p1.jpg" alt="p1" title="p1">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="images/p1.jpg" alt="p1" title="p1">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						
					</div>
					
					<div class="archive col-md-12 col-sm-12 col-xs-12">
						<h1>LATEST RESULTS</h1>
						<div class="border"></div>
						<div class="border1"></div>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<p class="pull-left">Jan 2015</p>
									<span class="pull-right">(25)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">Feb 2015</p>
									<span class="pull-right">(150)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">Mar 2015</p>
									<span class="pull-right">(256)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">April 2015</p>
									<span class="pull-right">(392)</span>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="pull-left">May 2015</p>
									<span class="pull-right">(551)</span>
								</a>
							</li>
						</ul>
					</div>
					
					<div class="tag col-md-12 col-sm-12 col-xs-12">
						<h1>TAGS</h1>
						<div class="border"></div>
						<div class="border1"></div>
						<ul class="list-inline">
							<li>
								<a href="">Marketing</a>
							</li>
							<li>
								<a href="">Designer</a>
							</li>
							<li>
								<a href="">Jobs</a>
							</li>
							<li>
								<a href="">Creative</a>
							</li>
							<li>
								<a href="">Jobs</a>
							</li>
						</ul>
					</div>
				</div>

				
			</div>
		</div>
	</div>
		</div>
	</div>
</div>
<!-- menu end here -->
<div class="container"><div class="row"></div></div>

	@endsection
