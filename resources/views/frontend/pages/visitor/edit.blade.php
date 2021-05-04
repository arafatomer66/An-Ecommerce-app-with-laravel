@extends('frontend.template.layout')

@section('body')
	<section class="myAccount"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<!--login form-->
					<div class="login-form">
						
						<form action="{{ route('updateVisitor') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="name" value="{{ $visitor->name }}">
							</div>

							<div class="form-group">
								<label>Email Address</label>
								<input type="text" name="email" value="{{ $visitor->email }}">
							</div>

							<div class="form-group">
								<label>Phone</label>
								<input type="text" name="phone" value="{{ $visitor->phone }}">
							</div>

							<div class="form-group">
								<label>Address</label>
								<input type="text" name="address" value="{{ $visitor->address }}">
							</div>

							<div class="form-group">
								<label>Profile Picture</label><br>
					  			@if ( Auth('visitor')->user()->image != NULL )
									<img src="{{ asset('images/visitors/' . Auth('visitor')->user()->image ) }}" width="70" height="70">
								@else
									Not Uploaded
								@endif
								<br>
								<input type="file" name="image" class="form-control-file">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-default">Save Change</button>
							</div>
							
						</form>

					</div><!--/login form-->
				</div>
			</div>
		</div>

	</section><!--/form-->
@endsection