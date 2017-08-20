@extends('master')

@section('content')


<!-- menu start here -->
<div class="container">
	<div class="row">
		@include('minheader')
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
