<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Landing Page - Novel Inspiration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
</head>

<body class="landing-page">
    <nav class="navbar navbar-danger navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('lpage.index') }}">NovI</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_day</i> Novel
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="{{ route('ltitle.index') }}">
                                    <i class="material-icons">dns</i> Novel List
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('lauth.index') }}">
                                    <i class="material-icons">people</i> Author List
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('lgenre.index') }}">
                                    <i class="material-icons">assignment</i> Genre List
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ltag.index') }}">
                                    <i class="material-icons">chat</i> Tag List
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sfinder.index') }}">
                                    <i class="material-icons">art_track</i> Series Finder
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">people</i> Profile
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">

                            <li>
                                <a href="{{ route('profu.index') }}">
                                    <i class="material-icons">account_circle</i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('bmark.index') }}">
                                    <i class="material-icons">view_quilt</i> Bookmark
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">build</i> Options
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="{{ route('ulogin.index') }}">
                                    <i class="material-icons">fingerprint</i> Login Page
                                </a>
                            </li>
                            <li>
                                <a href="../examples/signup-page.html">
                                    <i class="material-icons">person_add</i> Register Page
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="http://www.creative-tim.com/buy/material-kit-pro?ref=presentation" target="_blank" class="btn btn-white btn-simple">
                            <i class="material-icons">unarchive</i> Download
                        </a>
                    </li>
                </ul>
            </div>

    	</div>
    </nav>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg1.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <h1 class="title">Carousel 1</h1>
                                    <h4>Short Text 1</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg2.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <h1 class="title">Carousel 2</h1>
                                    <h4>Short Text 2</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg3.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-5 text-right">
                                    <h1 class="title">Carousel 3</h1>
                                    <h4>Short Text 3</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <i class="material-icons">keyboard_arrow_left</i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
    </div>

</div>

	<div class="main main-raised">
		<div class="container">
            <div class="section text-center">
                <h2 class="title">Popular Series</h2>

				<div class="features">
						<div class="row">
	    					<div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Popular Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 1</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Popular Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 2</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Popular Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 3</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>

					</div>
				</div>

            </div>

            <div class="section text-center">
                <h2 class="title">Trending Series</h2>

				<div class="features">
						<div class="row">
	    					<div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Trending Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 1</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Trending Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 2</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h6 class="category text-info">Trending Series</h6>
												<a href="#pablo">
													<h3 class="card-title">Title 3</h3>
												</a>
												<p class="card-description">
													Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('frontend/assets/img/examples/card-blog5.jpg') }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="#pablo" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
					</div>
				</div>
            </div>
	    	<div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Latest Update</h2>
                        <h5 class="description">This is where all new chapter listed. Click button to read more !</h5>
                    </div>
                </div>

				<div class="features">
					<div class="row">
						<div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('frontend/assets/img/examples/blog1.jpg') }}" />
                                    </a>
                                </div>

                                <div class="card-content">


                                    <h4 class="card-title">
                                        <a href="#pablo">Title</a>
                                    </h4>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="#pablo">
                                               <img src="{{ asset('frontend/assets/img/faces/marc.jpg') }}" alt="..." class="avatar img-raised">
                                               <span>Author</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
	                </div>
				</div>
                <ul class="pagination pagination-primary justify-content-center">
                    <!--
                        color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
                    -->
                        <li><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">...</a></li>
                        <li><a href="javascript:void(0);">5</a></li>
                        <li><a href="javascript:void(0);">6</a></li>
                        <li class="active"><a href="javascript:void(0);">7</a></li>
                        <li><a href="javascript:void(0);">8</a></li>
                        <li><a href="javascript:void(0);">9</a></li>
                        <li><a href="javascript:void(0);">...</a></li>
                        <li><a href="javascript:void(0);">12</a></li>
                </ul>
            </div>


        </div>
	</div>

    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="http://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
					<li>
                        <a href="http://presentation.creative-tim.com">
                           About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                           Blog
                        </a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
            </div>
        </div>
    </footer>

</body>
	<!--   Core JS Files   -->
	<script src="{{ asset('frontend/assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('frontend/assets/js/material.min.js') }}"></script>

	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<script src="{{ asset('frontend/assets/js/moment.min.js') }}"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script src="{{ asset('frontend/assets/js/nouislider.min.js') }}" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<script src="{{ asset('frontend/assets/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
	<script src="{{ asset('frontend/assets/js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
	<script src="{{ asset('frontend/assets/js/bootstrap-tagsinput.js') }}"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script src="{{ asset('frontend/assets/js/jasny-bootstrap.min.js') }}"></script>

	<!--    Plugin For Google Maps   -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY4IVObHBjj-LXKxo80sPCcDssheEXz1g"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="{{ asset('frontend/assets/js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>
</html>
