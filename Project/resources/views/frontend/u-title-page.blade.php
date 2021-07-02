@extends('frontend/layouts.template-profile')

@section('header')
    User Novel - Novel Inspiration
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="profile-tabs">
            <div class="nav-align-center">
                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                    <li class="active">
                        <a href="#work" role="tab" data-toggle="tab">
                            <i class="material-icons">palette</i>
                            Title
                        </a>
                    </li>
                    <li>
                        <a href="#connections" role="tab" data-toggle="tab">
                            <i class="material-icons">people</i>
                            Review
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
                              <button class="btn btn-primary btn-fab btn-fab-mini btn-round" title="Add Genre">
								<i class="material-icons">add</i>
							  </button>
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
                            <button class="btn btn-primary btn-fab btn-fab-mini btn-round" title="Add Tag">
                                <i class="material-icons">add</i>
                            </button>

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
                                    <th class="text-left">
                                      Date
                                    </th>
                                    <th class="text-center">
                                      Chapter
                                    </th>
                                    <th class="text-right">
                                      Action
                                    </th>
                                  </thead>
                                  <tbody>
                                      <tr>
                                         <td class="text-left">
                                              20XX/XX/XX
                                         </td>
                                         <td class="text-center">
                                              Chapter 3
                                         </td>
                                         <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-info">
                                                <i class="material-icons">person</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-success">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                      </tr>
                                      <tr>
                                          <td class="text-left">
                                              20XX/XX/XX
                                          </td>
                                          <td class="text-center">
                                              Chapter 2
                                          </td>
                                          <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-info">
                                                <i class="material-icons">person</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-success">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                      </tr>
                                      <tr>
                                          <td class="text-left">
                                              20XX/XX/XX
                                          </td>
                                          <td class="text-center">
                                              Chapter 1
                                          </td>
                                          <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-info">
                                                <i class="material-icons">person</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-success">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button>
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
              <button class="btn btn-fab btn-primary" rel="tooltip" title="Add New Chapter">
                <i class="material-icons">add</i>
              </button>
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
            <div class="col-md-8 col-md-offset-2">
                <div class="media-area">
                    <h3 class="title text-center">1 Reviews</h3>
                    <div class="media">
                        <a class="pull-left" href="#pablo">
                            <div class="avatar">
                                <img class="media-object" src="frontend/assets/img/faces/avatar.jpg" alt="..."/>
                            </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Tina Andrew <small>&middot; 7 minutes ago</small></h4>
                            <h6 class="text-muted"></h6>

                            <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country. Panda! Don't be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                            <p>All praises and blessings to the families of people who never gave up on dreams. Don't forget, You're Awesome!</p>
            </div>
        </div>
    </div>

</div>
@endsection
