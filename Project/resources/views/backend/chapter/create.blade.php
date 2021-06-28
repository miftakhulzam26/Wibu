@extends('backend.layouts.template')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Add Chapter</h4>
              <p class="card-category">Add New Chapter</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('chapter.store') }}">
                {!! csrf_field() !!}
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="user_name" name="title" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">TTS</label>
                      <input type="text" id="user_email" name="tts" class="form-control">
                    </div>
                  </div>
                </div>
                <!--<div class="col-md-4">
                    <label class="bmd-label-floating">Profile</label>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('backend/assets/img/faces/person_8x10.png') }}" rel="nofollow" alt="user_pprofile">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <input type="file" name="user_pprofile" />
                            </div>
                        </div>
                </div>-->
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Novel</label>
                      <!--<input type="text" id="user_username" name="title_id" class="form-control">
                      <label for="exampleFormControlSelect1">Author</label>-->
                            <select class="form-control selectpicker" name="title_id" data-style="btn btn-link" id="exampleFormControlSelect1">
                              @foreach ($title as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                            </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Isi</label>
                      <div class="form-group">
                        <label class="bmd-label-floating"> Chapter Content Here.</label>
                        <textarea id="user_desc" name="text" class="form-control" rows="5"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-info pull-right">Add New Chapter</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
