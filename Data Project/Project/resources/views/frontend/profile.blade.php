@extends('frontend/layouts.template')

@section('profile')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/city-profile.jpg') }}');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">
            <div class="avatar">
              <img src="{{ asset('frontend/assets/img/faces/christian.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
            </div>
            <div class="name">
              <h3 class="title">Christian Louboutin</h3>
              <h6>Designer</h6>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="description text-center">
        <p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
      </div>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile-tabs">
            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                  <i class="material-icons">camera</i> History
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                  <i class="material-icons">palette</i> Work
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                  <i class="material-icons">favorite</i> Bookmark
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-content tab-space">
        <div class="tab-pane active text-center gallery" id="studio">
          <div class="row">
            <table class="table">
                <thead class=" text-primary">
                  <th>
                    Date
                  </th>
                  <th>
                    Name
                  </th>
                </thead>
                <tbody>
                    <tr>
                      <td>
                        Date1
                      </td>
                      <td>
                        Data1
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Date2
                      </td>
                      <td>
                        Data2
                      </td>
                    </tr>
                      <tr>
                      <td>
                        Date3
                      </td>
                      <td>
                        Data3
                      </td>
                    </tr>
                </tbody>
              </table>
          </div>
        </div>
        <div class="tab-pane text-center gallery" id="works">
          <div class="row">
            <div class="col-md-3 ml-auto">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
            </div>
            <div class="col-md-3 mr-auto">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
            </div>
          </div>
        </div>
        <div class="tab-pane text-center gallery" id="favorite">
          <div class="row">
            <div class="col-md-3 ml-auto">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
            </div>
            <div class="col-md-3 mr-auto">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
              <img src="{{ asset('img/frontend/cover/test1.jpg') }}" class="rounded">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
