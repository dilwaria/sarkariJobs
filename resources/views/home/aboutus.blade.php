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
				 
				<div id="jobdetail" class="job_detail_list">
				<div class="col-md-9 col-sm-9 col-xs-12 paddleft content">
					<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
					<ul class="list-inline">
						<li>
							<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
						</li>
					</ul>
					<p>

					We are a startup which is focused on providing a hassle free and user friendly platform to search for jobs in the related domain and thereby making the whole process of searching , reading description and applying for jobs less tiring and user friendly.
</p>
<p>
Our main focus is to decrease time in searching for the jobs and thereby making the whole process of searching and applying just few clicks away.
</p>
<p>
We believe in designing  a user appealing  interface which will increase the efficiency capacity of users by  keeping the users away from unnecessary scrolling.(can add some more )
</p>
<p>
We also have a machine learning division which read the user patterns ,their activities, and interests thereby coming up with the best recommendations of jobs for a particular user.
					</p>
					<ul>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					</ul>
					
					<button type="button" class="btn btn-info" onclick="">APPLY THIS JOB</button>
				</div>
				</div>>
				
			    @include('home.rightsidebar')
				
				
			</div>
		</div>
	</div>
		</div>
	</div>
</div>
<!-- menu end here -->
<div class="container"><div class="row"></div></div>

	@endsection
