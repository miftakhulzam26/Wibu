@extends('frontend/layouts-login.logtemp')

@section('login')

<div class="row">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
      <div class="card card-login">
        <form class="form" method="" action="">
          <div class="card-header card-header-primary text-center">
            <h3 class="card-title">Login</h3>
            <br>
            <!--<div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>-->
          </div>
          <p class="description text-center">Or Be Classical</p>
          <div class="card-body">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">face</i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Username...">
            </div>
            <!--<div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">mail</i>
                </span>
              </div>
              <input type="email" class="form-control" placeholder="Email...">
            </div>-->
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">lock_outline</i>
                </span>
              </div>
              <input type="password" class="form-control" placeholder="Password...">
            </div>
          </div>
          <div class="footer text-center">
            <button class="btn btn-primary" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

