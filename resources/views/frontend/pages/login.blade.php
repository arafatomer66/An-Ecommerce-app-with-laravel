@extends('frontend.template.layout')

@section('body')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<!--login form-->
					<div class="login-form">
						<h2>Login to your account</h2>
						
						@isset($url)
	                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
	                    @else
	                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
	                    @endisset
							 @csrf
							<div class="form-group">
			                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your username" autofocus>

			                @error('email')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
			            </div><!-- form-group -->

			            <div class="form-group">
			                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
			                @error('password')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror  
			            </div><!-- form-group -->


							<button type="submit" class="btn btn-default">{{ __('Login') }}</button>
						</form>

					</div><!--/login form-->
				</div>

			</div>
		</div>
	</section><!--/form-->
@endsection