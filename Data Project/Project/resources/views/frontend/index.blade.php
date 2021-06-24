@extends('frontend/layouts.template')

@section('index')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/city-profile.jpg') }}')">

  </div>
  <div class="main main-raised">
    <div class="container">
        <div class="section text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title">Welcome !!</h2>
            </div>
          </div>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('frontend/assets/img/bg2.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('frontend/assets/img/bg3.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('frontend/assets/img/bg.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="section text-center">
          <h2 class="title">New Updates</h2>
          <h5 class="mb-0">List of Novel Latest Update</h5>
          <div class="team">
            <div class="row">
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/frontend/cover/test1.jpg') }}" rel="nofollow" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
              </div>
            </div>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="javascript:;" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:;">Next</a>
                  </li>
                </ul>
              </nav>
          </div>
        </div>
        <div class="section section-contacts">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="text-center title">Work with us</h2>
              <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
              <form class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Your Name</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Your Email</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                  <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-4 ml-auto mr-auto text-center">
                    <button class="btn btn-primary btn-raised">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

  </div>




@endsection
