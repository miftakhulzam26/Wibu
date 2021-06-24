@extends('frontend.layouts/list-template-page')

@section('lauthor')
<div class="section text-center">
    <h2 class="title">Author List</h2>

    <div class="team">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="col-md-5">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="{{ asset('frontend/assets/img/faces/card-profile1-square.jpg') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-content">
                            <h4 class="card-title"><a href="http://">Alec Thompson</a></h4>
                            <h6 class="category text-muted">Number of Work : 6</h6>
                            <h6 class="category text-muted">Views : 100</h6>
                            <h6 class="category text-muted">Likes : 150</h6>
                            <div class="footer">
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="col-md-5">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="{{ asset('frontend/assets/img/faces/card-profile6-square.jpg') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-content">
                            <h4 class="card-title"><a href="http://">Kendall Andrew</a></h4>
                            <h6 class="category text-muted">Number of Work : 6</h6>
                            <h6 class="category text-muted">Views : 100</h6>
                            <h6 class="category text-muted">Likes : 150</h6>
                            <div class="footer">
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="col-md-5">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="{{ asset('frontend/assets/img/faces/card-profile4-square.jpg') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-content">
                            <h4 class="card-title"><a href="http://">Gina Andrew</a></h4>
                            <h6 class="category text-muted">Number of Work : 6</h6>
                            <h6 class="category text-muted">Views : 100</h6>
                            <h6 class="category text-muted">Likes : 150</h6>
                            <div class="footer">
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-youtube"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="col-md-5">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="{{ asset('frontend/assets/img/faces/card-profile2-square.jpg') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-content">
                            <h4 class="card-title"><a href="http://">George West</a></h4>
                            <h6 class="category text-muted">Number of Work : 6</h6>
                            <h6 class="category text-muted">Views : 100</h6>
                            <h6 class="category text-muted">Likes : 150</h6>
                            <div class="footer">
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <ul class="pagination pagination-primary">
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
@endsection
