@extends('frontend/layouts.template')

@section('header')
    Title Page
@endsection

@section('content')

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

@endsection
