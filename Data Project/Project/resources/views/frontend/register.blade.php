@extends('frontend/layouts-login.logtemp')
@section('register')
<div class="row">
    <div class="col-lg-8 col-md-8 ml-auto mr-auto">
      <div class="card card-login">
        <form class="form" method="" action="">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title">Register</h4>
            <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
          </div>
          <p class="description text-center">Or Be Classical</p>
          <div class="card-body">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">face</i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Author Name...">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Username...">
              </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">mail</i>
                </span>
              </div>
              <input type="email" class="form-control" placeholder="Email...">
            </div>
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
            <button class="btn btn-primary" type="submit">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

