<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login Page - Novel Inspiration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
</head>

<body class="login-page">
	<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	@include('frontend/layouts/navbar')
    	</div>
    </nav>

	<div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/bg7.jpg') }}'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form class="form" method="" action="">
							<div class="header header-primary text-center">
								<h4 class="card-title">Log in</h4>
                                <br>
								<!--<div class="social-line">
									<a href="#pablo" class="btn btn-just-icon btn-simple">
										<i class="fa fa-facebook-square"></i>
									</a>
									<a href="#pablo" class="btn btn-just-icon btn-simple">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#pablo" class="btn btn-just-icon btn-simple">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>-->
							</div>
                            <br>
							<!--<p class="description text-center">Or Be Classical</p>-->
							<div class="card-content">

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" placeholder="First Name...">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									<input type="text" class="form-control" placeholder="Email...">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" placeholder="Password..." class="form-control" />
								</div>

								<!-- If you want to add a checkbox to this form, uncomment this code

								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes" checked>
										Subscribe to newsletter
									</label>
								</div> -->
							</div>
							<div class="footer text-center">
								<a href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg">Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@include('frontend/layouts/footer')

	</div>

</body>
	@include('frontend/layouts/js')
</html>
</html>
