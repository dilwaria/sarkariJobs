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
				 
				
				<div class="col-md-6 col-sm-6 col-xs-12 paddleft content">
					<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
					<ul class="list-inline">
						<li>
							<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
						</li>
					</ul>
					<p>

					
					<ul>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					   <li>Lorem ipsum dolor sit amet</li>
					</ul>
					
					<button type="button" class="btn btn-info" onclick="">APPLY THIS JOB</button>
				</div>
				
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
