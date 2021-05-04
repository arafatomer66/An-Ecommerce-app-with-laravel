@extends('frontend.template.layout')

@section('body')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4 col-sm-offset-4">
					<!--sign up form-->
					<div class="signup-form">
						<h2>New User Signup!</h2>
						
						<form action="{{ url('register/visitor') }}" method="POST">
							@csrf

							<div class="form-group">
							 	<input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Enter your Full Name" autofocus>
								@error('name')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
							</div>
							
							<div class="form-group">
				                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email">
				                @error('email')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
				            </div>

				            <div class="form-group">
				                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">

				                @error('password')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
				            </div><!-- form-group -->

				            <div class="form-group">
				                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Type Your Password">
				            </div><!-- form-group -->

							<button type="submit" class="btn btn-default">{{ __('Register') }}</button>
						</form>

					</div><!--/sign up form-->
				</div>

			</div>
		</div>
	</section><!--/form-->
@endsection