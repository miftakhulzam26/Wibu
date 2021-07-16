@extends('frontend/layouts.template')

@section('header')
    Title Page
@endsection

@section('content')

<div class="container">
    <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-left title">{{$title->name}} </h2>
            <div class="row">
              <div class="col-md-4">
                  <table class="table">
                      <tbody>
                          <tr>
                              <img src="{{ asset('images/'.$title->cover)  }}" alt="Cover Image" height="300" width="200">
                          </tr>
                          <!--<tr>
                              <h4 class="text-left title">Status </h4>
                              <p class="text-left">
                                <a href="http://">Completed</a>
                              </p>
                          </tr>-->
                          <tr>
                              <h4 class="text-left title">Author </h4>
                              <p class="text-left">
                                <a href="http://">{{$title->creator_name}}</a>
                              </p>
                          </tr>
                          <tr>
                              <h4 class="text-left title">Year </h4>
                              <p class="text-left">
                                {{$title->created_at}}
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
                                <a href="#pablo" class="btn btn-danger btn-simple pull-left">
                                    <i class="material-icons">favorite</i> {{$title->favorit}}
                                </a>
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
                                {{$title->sinopsis}}
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
                                         <td cl>
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
