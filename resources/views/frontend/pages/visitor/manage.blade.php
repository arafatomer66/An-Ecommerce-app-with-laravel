@extends('frontend.template.layout')

@section('body')
	<section class="myAccount"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!--login form-->
					<div class="login-form">
						<h2>Welcome, {{ Auth('visitor')->user()->name }}</h2>
					</div><!--/login form-->
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-sm-6 myAccount-section">
					<table class="table table-bordered table-hover">
					  <tbody>
					  	<tr>
					      	<th scope="row">Profile Picture</th>
					  		<td>
					  			@if ( Auth('visitor')->user()->image != NULL )
									<img src="{{ asset('images/visitors/' . Auth('visitor')->user()->image ) }}" class="visitor-avater">
								@else
									<img src="{{ asset('images/visitors/avater.png') }}" class="visitor-avater">
								@endif
					  		</td>
					    </tr>
					  	<tr>
					      	<th scope="row">Full Name</th>
					  		<td>
					  			{{ Auth('visitor')->user()->name }}
					  		</td>
					    </tr>
					  	<tr>
					      	<th scope="row">Email Address</th>
					  		<td>
					  			{{ Auth('visitor')->user()->email }}
					  		</td>
					    </tr>
					    <tr>
					      	<th scope="row">Phone No</th>
					  		<td>
					  			@if ( Auth('visitor')->user()->phone != NULL )
									{{ Auth('visitor')->user()->phone }}
								@else
									N/A
								@endif
					  		</td>
					    </tr>
					    <tr>
					      	<th scope="row">Address</th>
					  		<td>
					  			@if ( Auth('visitor')->user()->address != NULL )
									{{ Auth('visitor')->user()->address }}
								@else
									N/A
								@endif
					  		</td>
					    </tr>

					  </tbody>
					</table>
					<a href="{{ route('editVisitor') }}" class="btn btn-primary pull-left">Update Profile Info</a>
				</div>

			</div>
		</div>

	</section><!--/form-->
@endsection