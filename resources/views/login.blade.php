@extends('common.main')
@section('content')
			<!-- Title Header Start -->
			<section class="login-screen-sec">
				<div class="container">
					<div class="login-screen">
						<a href="index-2.html"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
						<form>
							<input type="text" class="form-control" placeholder="Useraname">
							<input type="password" class="form-control" placeholder="Password">
							<button class="btn btn-login" type="submit">Login</button>
							<span>You Have No Account? <a href="signup.html"> Create An Account</a></span>
							<span><a href="lost-password.html"> Forget Password</a></span>
						</form>
					</div>
				</div>
			</section>
@endsection