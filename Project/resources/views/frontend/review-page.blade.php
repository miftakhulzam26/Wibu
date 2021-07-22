@extends('frontend/layouts.template')

@section('header')
    Review Page - Novel Inspiration
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
                      </tbody>
                  </table>
              </div>
              <div class="col-md-7">

              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
