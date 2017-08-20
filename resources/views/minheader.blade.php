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
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Central Govt Jobs</a>
								</li>

								
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">State Govt Jobs <span class="fa fa-angle-down"></span></a>
									<div class="dropdown-menu animated fadeInDown">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												 @foreach($stateList as $list)
												<li>
													<a href="#">{{$list['statename']}}</a>
												</li>
												 @endforeach
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