<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile Page - Material Kit PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
</head>

<body class="profile-page">
	<nav class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
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
								<a href="../sections.html#headers">
									<i class="material-icons">dns</i> Novel List
								</a>
							</li>
							<li>
								<a href="../sections.html#teams">
									<i class="material-icons">people</i> Author List
								</a>
							</li>
							<li>
								<a href="../sections.html#projects">
									<i class="material-icons">assignment</i> Genre List
								</a>
							</li>
							<li>
								<a href="../sections.html#testimonials">
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
								<a href="../examples/blog-posts.html">
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


	<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/examples/city.jpg') }}');"></div>

	<div class="main main-raised">
		<div class="profile-content">
            <div class="container">

                <div class="row">
	                <div class="col-xs-6 col-xs-offset-3">
        	           <div class="profile">
	                        <div class="avatar">{{ asset('') }}
	                            <img src="{{ asset('frontend/assets/img/faces/christian.jpg') }}" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">Christian Louboutin</h3>
								<br>
								<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-pinterest"><i class="fa fa-pinterest"></i></a>
	                        </div>
	                    </div>
    	            </div>
                    <div class="col-xs-2 follow">
	                   <button class="btn btn-fab btn-primary" rel="tooltip" title="Add New Story">
                            <i class="material-icons">add</i>
                        </button>
	                </div>
                </div>


                <div class="description text-center">
                    <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                </div>

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="profile-tabs">
		                    <div class="nav-align-center">
								<ul class="nav nav-pills nav-pills-icons" role="tablist">
									<li class="active">
			                            <a href="#work" role="tab" data-toggle="tab">
											<i class="material-icons">palette</i>
											History
			                            </a>
			                        </li>
                                    <li>
										<a href="#connections" role="tab" data-toggle="tab">
											<i class="material-icons">people</i>
											Work
										</a>
									</li>
			                        <li>
			                            <a href="#media" role="tab" data-toggle="tab">
											<i class="material-icons">camera</i>
			                                Bookmark
			                            </a>
			                        </li>
			                    </ul>


							</div>
						</div>
						<!-- End Profile Tabs -->
					</div>
                </div>
                <div class="tab-content">
			        <div class="tab-pane active work" id="work">
				        <div class="row">
	                        <div class="col-md-7 col-md-offset-1">
		                        <h4 class="title">Latest Chapters</h4>
		                        <div class="row collections">
			                        <div class="col-md-6">
			                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                    						<a href="#pablo"></a>
                    						<div class="card-content">
                    							<label class="label label-primary">Romance</label>
                    							<a href="#pablo">
                    								<h2 class="card-title">Stilleto</h2>
                    							</a>
                    						</div>
                    					</div>
			                        </div>
                                    <div class="col-md-6">
			                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                    						<a href="#pablo"></a>
                    						<div class="card-content">
                    							<label class="label label-primary">Romance</label>
                    							<a href="#pablo">
                    								<h2 class="card-title">Stilleto</h2>
                    							</a>
                    						</div>
                    					</div>
			                        </div>
                                    <div class="col-md-6">
			                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                    						<a href="#pablo"></a>
                    						<div class="card-content">
                    							<label class="label label-primary">Romance</label>
                    							<a href="#pablo">
                    								<h2 class="card-title">Stilleto</h2>
                    							</a>
                    						</div>
                    					</div>
			                        </div>
                                    <div class="col-md-6">
			                            <div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}') ; width:300px;height:500px ">
                    						<a href="#pablo"></a>
                    						<div class="card-content">
                    							<label class="label label-primary">Romance</label>
                    							<a href="#pablo">
                    								<h2 class="card-title">Stilleto</h2>
                    							</a>
                    						</div>
                    					</div>
			                        </div>
                                </div>
		                    </div>
		                    <div class="col-md-2 col-md-offset-1 stats">
			                    <h4 class="title">Stats</h4>
			                    <ul class="list-unstyled">
				                    <li><b>60</b> Stories</li>
				                    <li><b>4</b> Chapters</li>
				                    <li><b>331</b> Viewers</li>
				                    <li><b>1.2K</b> Likes</li>
				                </ul>
				                <hr />
				                <h4 class="title">About My Work</h4>
				                <p class="description">French luxury footwear and fashion. The footwear has incorporated shiny, red-lacquered soles that have become his signature.</p>
				                <hr />
				                <h4 class="title">Focus</h4>
				                <span class="label label-primary">Romance</span>
				                <span class="label label-rose">Slice of Life</span>
			                </div>
	                    </div>
			        </div>
                    <div class="tab-pane connections" id="connections">
                        <div class="row">
                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>


            			</div>
                    </div>
                    <div class="tab-pane text-center gallery" id="media">
						<div class="row">
                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
	    								</a>
	    							</div>
	    						</div>
	    					</div>

                            <div class="col-md-4">

	    						<div class="card card-background" style="background-image: url('{{ asset('frontend/assets/img/test1.jpg') }}'); width:300px;height:500px">

	    							<div class="card-content">
	    								<h6 class="category text-info">Productivy Apps</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">The Best Productivity Apps on Market</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Read Article
	    								</a>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">watch_later</i> Watch Later
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
