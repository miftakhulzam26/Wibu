@extends('frontend/layouts.template-profile')

@section('header')
    Edit Profil
@endsection

@section('content')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3 text-center">
        <h4><small></small></h4>
        <form method="POST" action="{{ route('profu.update',$user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" value="{{$user->id}}">
        <input type="hidden" value="{{$user->job}}" name="job">
        <div class="fileinput fileinput-new " data-provides="fileinput">
            <div class="fileinput-new thumbnail img-circle img-raised">
                <img src="{{URL::to('frontend/assets/img/faces/',$user->foto) }}" alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
            <div>
                <span class="btn btn-raised btn-round btn-default btn-file">
                    <span class="fileinput-new">Add Photo</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="foto" /></span>
                <br />
                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
            </div>
        </div>
        <div class="name">
                {{-- <h3 class="title">{{ Auth::user()->name }}</h3> --}}
                <input type="text" id="user_name" name="name" value="{{ $user->name }}" class="text-center form-control">
                <input type="email" id="user_name" name="email" value="{{ $user->email }}" class="text-center form-control">
                <input type="password" id="user_name" name="password"class="text-center form-control">
                <div class="form-group">
                    <textarea id="user_desc" name="deskripsi" class="text-center form-control" rows="2">{{ $user->deskripsi }}</textarea>
                </div>

            <br>
            <button type="submit" class="btn btn-round btn-default btn-file btn btn-info">Save Edit User</button><br>
            <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
            <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#pablo" class="btn btn-just-icon btn-simple btn-pinterest"><i class="fa fa-pinterest"></i></a>
        </div>
        </form>
    </div>

</div>
@endsection
