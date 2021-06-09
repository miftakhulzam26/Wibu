@extends('frontend/layouts.template')

@section('title')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/city-profile.jpg') }}')">

  </div>
  <div class="main main-raised">
    <div class="container">
        <div class="section section-contacts">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="text-left title">Red Planet -Der Rote Planet- </h2>
              <div class="row">
                <div class="col-md-5">
                    <table class="table">
                        <tbody>
                            <tr>
                                <img src="{{ asset('img/frontend/cover/test1.jpg') }}" alt="Cover Image" height="300" width="200">
                            </tr>
                            <tr>
                                <h4 class="text-left title">Status </h4>
                                <p class="text-left">
                                    Completed
                                </p>
                            </tr>
                            <tr>
                                <h4 class="text-left title">Author </h4>
                                <p class="text-left">
                                    Robert A. Heinlein
                                </p>
                            </tr>
                            <tr>
                                <h4 class="text-left title">Artist </h4>
                                <p class="text-left">
                                    Nihil
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
                                <p class="text-left">
                                    Completed
                                </p>
                            </tr>
                            <tr>
                                <h4 class="text-left title">Tag </h4>
                                <p class="text-left">
                                    Completed
                                </p>
                            </tr>
                            <tr>
                                <h4 class="text-left title">Rating </h4>
                                <p class="text-left">
                                    Completed
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
                                                Read
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
                                                Read
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
                                                Read
                                            </td>
                                          </tr>
                                    </tbody>
                                  </table>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="javascript:;">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                          <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                          <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                          <li class="page-item"><a class="page-link" href="javascript:;">Next</a></li>
                        </ul>
                      </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>




@endsection
