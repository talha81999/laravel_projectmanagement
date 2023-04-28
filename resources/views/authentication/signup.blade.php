@extends('authentication.layouts.main')


@section('main-container')
<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="{{url('assets/images/logo-dark.png')}}" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Username">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-mail"></i></span>
							</div>
							<input type="email" class="form-control" placeholder="Email address">
						</div>
						<div class="input-group mb-4">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-lock"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group text-left mt-2">
							<div class="checkbox checkbox-primary d-inline">
								<input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
								<label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label>
							</div>
						</div>
						<button class="btn btn-primary btn-block mb-4">Sign up</button>
						<p class="mb-2">Already have an account? <a href="auth-signin.html" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

@endsection
