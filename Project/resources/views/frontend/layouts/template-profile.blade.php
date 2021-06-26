<!doctype html>
<html lang="en">
<head>
	@include('frontend/layouts/header')
</head>

<body class="profile-page">
	<nav class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	@include('frontend/layouts/navbar')
    	</div>
    </nav>


	<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/examples/city.jpg') }}');"></div>

	@yield('content')

    @include('frontend/layouts/footer')

</body>
@include('frontend/layouts/js')
</html>
