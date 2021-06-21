@extends('backend.layouts.template')

@section('edituser')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Edit User</h4>
              <p class="card-category">Edit User</p>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('chapter.update',$chapter->chapter_id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" id="user_id" name="chapter_id" value="{{ $chapter->chapter_id }}" class="form-control">
                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Name</label>
                        <input type="text" id="user_name" name="title" value="{{ $chapter->chapter_title }}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">TTS</label>
                        <input type="text" id="user_email" name="tts" value="{{ $chapter->chapter_tts }}" class="form-control">
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
                        <input type="text" id="user_username" name="title_id" value="{{ $chapter->title_id }}" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Isi</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> Don't Expose Your Private Information</label>
                          <textarea id="user_desc" name="text" class="form-control" rows="5">{{ $chapter->chapter_text}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-info pull-right">Save Edit User</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
