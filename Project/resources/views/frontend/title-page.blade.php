<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Landing Page - Material Kit PRO by Creative Tim</title>

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
        		<a class="navbar-brand" href="../presentation.html">Material Kit PRO</a>
        	</div>

        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
						<a href="../index.html">
							<i class="material-icons">apps</i> Components
						</a>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="material-icons">view_day</i> Sections
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-with-icons">
							<li>
								<a href="../sections.html#headers">
									<i class="material-icons">dns</i> Headers
								</a>
							</li>
							<li>
								<a href="../sections.html#features">
									<i class="material-icons">build</i> Features
								</a>
							</li>
							<li>
								<a href="../sections.html#blogs">
									<i class="material-icons">list</i> Blogs
								</a>
							</li>
							<li>
								<a href="../sections.html#teams">
									<i class="material-icons">people</i> Teams
								</a>
							</li>
							<li>
								<a href="../sections.html#projects">
									<i class="material-icons">assignment</i> Projects
								</a>
							</li>
							<li>
								<a href="../sections.html#pricing">
									<i class="material-icons">monetization_on</i> Pricing
								</a>
							</li>
							<li>
								<a href="../sections.html#testimonials">
									<i class="material-icons">chat</i> Testimonials
								</a>
							</li>
							<li>
								<a href="../sections.html#contactus">
									<i class="material-icons">call</i> Contacts
								</a>
							</li>

						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="material-icons">view_carousel</i> Examples
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-with-icons">
							<li>
								<a href="../examples/about-us.html">
									<i class="material-icons">account_balance</i> About Us
								</a>
							</li>
							<li>
								<a href="../examples/blog-post.html">
									<i class="material-icons">art_track</i> Blog Post
								</a>
							</li>
							<li>
								<a href="../examples/blog-posts.html">
									<i class="material-icons">view_quilt</i> Blog Posts
								</a>
							</li>
							<li>
								<a href="../examples/contact-us.html">
									<i class="material-icons">location_on</i> Contact Us
								</a>
							</li>
							<li>
								<a href="../examples/landing-page.html">
									<i class="material-icons">view_day</i> Landing Page
								</a>
							</li>
							<li>
								<a href="../examples/login-page.html">
									<i class="material-icons">fingerprint</i> Login Page
								</a>
							</li>
							<li>
								<a href="../examples/pricing.html">
									<i class="material-icons">attach_money</i> Pricing Page
								</a>
							</li>
							<li>
								<a href="../examples/ecommerce.html">
									<i class="material-icons">shop</i> Ecommerce Page
								</a>
							</li>
							<li>
								<a href="../examples/product-page.html">
									<i class="material-icons">beach_access</i> Product Page
								</a>
							</li>
							<li>
								<a href="../examples/profile-page.html">
									<i class="material-icons">account_circle</i> Profile Page
								</a>
							</li>
							<li>
								<a href="../examples/signup-page.html">
									<i class="material-icons">person_add</i> Signup Page
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="http://www.creative-tim.com/buy/material-kit-pro?ref=presentation" target="_blank" class="btn btn-white btn-simple">
							<i class="material-icons">shopping_cart</i> Buy Now
						</a>
					</li>
        		</ul>
        	</div>
    	</div>
    </nav>


    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/bg8.jpg') }}');">
        <div class="container">
            <div class="row">
				<div class="col-md-6">
					<h1 class="title">Your Story Starts With Us.</h1>
                    <h4>Every landing page needs a small description after the big bold title, that's why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
                    <br />
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
						<i class="fa fa-play"></i> Watch video
					</a>
				</div>
            </div>
        </div>
    </div>

	<div class="main main-raised">
		<div class="container">
	    	<div class="section section-contacts">
                <div class="row">
                  <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-left title">Red Planet -Der Rote Planet- </h2>
                    <div class="row">
                      <div class="col-md-4">
                          <table class="table">
                              <tbody>
                                  <tr>
                                      <img src="{{ asset('img/frontend/cover/test1.jpg') }}" alt="Cover Image" height="300" width="200">
                                  </tr>
                                  <tr>
                                      <h4 class="text-left title">Status </h4>
                                      <p class="text-left">
                                        <a href="http://">Completed</a>
                                      </p>
                                  </tr>
                                  <tr>
                                      <h4 class="text-left title">Author </h4>
                                      <p class="text-left">
                                        <a href="http://">Robert A. Heinlein</a>
                                      </p>
                                  </tr>
                                  <tr>
                                      <h4 class="text-left title">Year </h4>
                                      <p class="text-left">
                                        20XX
                                      </p>
                                  </tr>
                                  <tr>
                                      <h4 class="text-left title">Genre </h4>
                                      <p class="text-left" style="">
                                          <!--<div class="row">
                                              <div class="col-md-3">
                                                <span class="label label-default">Action</span>
                                              </div>
                                              <div class="col-md-3">
                                                <span class="label label-default">Romance</span>
                                              </div>
                                              <div class="col-md-3">
                                                <span class="label label-default">Sci-fi</span>
                                              </div>
                                              <div class="col-md-3">
                                                <span class="label label-default">Comedy</span>
                                              </div>
                                              <div class="col-md-3">
                                                <span class="label label-default">Default</span>
                                              </div>
                                          </div>-->

                                            <a href="http://">Action</a>
                                            <a href="http://">Romance</a>
                                            <a href="http://">Sci-fi</a>
                                            <a href="http://">Comedy</a>
                                            <a href="http://">Default</a>
                                            <a href="http://">Default</a>
                                            <a href="http://">Default</a>






                                      </p>
                                  </tr>
                                  <tr>
                                      <h4 class="text-left title">Tag </h4>
                                      <p class="text-left">
                                        <a href="http://">Action</a>
                                        <a href="http://">Romance</a>
                                        <a href="http://">Sci-fi</a>
                                        <a href="http://">Comedy</a>
                                        <a href="http://">Default</a>
                                      </p>
                                  </tr>
                                  <tr>
                                      <h4 class="text-left title">Likes </h4>
                                      <p class="text-left">

                                          <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                                            <i class="material-icons">favorite</i>
                                          </button>
                                          4000
                                      </p>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <div class="col-md-7">
                          <table class="table">
                              <tbody>
                                  <tr>
                                      <h4 class="text-left title">Description </h4>
                                      <p class="text-left">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend massa lorem, nec tristique velit rhoncus volutpat. Ut posuere massa tellus, luctus vestibulum ligula ultricies et. Maecenas finibus sem a nisl mattis, sed lobortis nisl porttitor. Nam consequat, neque nec aliquam sollicitudin, ipsum urna placerat neque, ac mattis eros purus ut turpis. Donec vel rhoncus est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla facilisi. Etiam in consequat velit, et efficitur diam. Proin posuere varius condimentum. Fusce mauris ipsum, venenatis sit amet ipsum sit amet, ultricies faucibus odio. Suspendisse purus ante, lobortis nec aliquam vel, condimentum quis urna.
                                      </p>
                                  </tr>
                                  <tr>
                                      <table class="table">
                                          <thead class=" text-primary">
                                            <th>
                                              Date
                                            </th>
                                            <th>
                                              Chapter
                                            </th>
                                            <th>
                                                Link
                                            </th>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                 <td>
                                                      20XX/XX/XX
                                                 </td>
                                                 <td>
                                                      Chapter 3
                                                 </td>
                                                 <td>
                                                    <a href="http://">Read</a>
                                                 </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      20XX/XX/XX
                                                  </td>
                                                  <td>
                                                      Chapter 2
                                                  </td>
                                                  <td>
                                                    <a href="http://">Read</a>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      20XX/XX/XX
                                                  </td>
                                                  <td>
                                                      Chapter 1
                                                  </td>
                                                  <td>
                                                    <a href="http://">Read</a>
                                                  </td>
                                                </tr>
                                          </tbody>
                                        </table>
                                  </tr>
                              </tbody>
                          </table>
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
                      <button class="btn btn-fab btn-primary" rel="tooltip" title="Add to Bookmark">
                        <i class="material-icons">add</i>
                      </button>
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
