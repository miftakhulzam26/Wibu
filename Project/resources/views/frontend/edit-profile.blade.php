@extends('frontend/layouts.template')

@section('header')
    Edit Profil
@endsection

@section('content')
<div id="file-uploader">
    <div class="title">
        <h3>File Uploader</h3>
    </div>

    <div class="row">

        <div class="col-md-5 col-sm-8">
            <h4><small>Regular Image</small></h4>
            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail img-raised">
                    <img src="{{asset('frontend/assets/img/image_placeholder.jpg')}}" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                <div>
                    <span class="btn btn-raised btn-round btn-default btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="..." />
                    </span>
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-4">
            <h4><small>Avatar</small></h4>
            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail img-circle img-raised">
                    <img src="{{asset('frontend/assets/img/placeholder.jpg')}}" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                <div>
                    <span class="btn btn-raised btn-round btn-default btn-file">
                        <span class="fileinput-new">Add Photo</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="..." /></span>
                    <br />
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <h4><small>Simple Material Input</small></h4>

            <div class="form-group form-file-upload">
                <input type="file" id="inputFile1">
                <div class="input-group">
                    <input type="text" readonly="" class="form-control" placeholder="Simple chooser...">
                </div>
            </div>

            <div class="form-group form-file-upload">
                <input type="file" id="inputFile2" multiple="">
                <div class="input-group">
                    <input type="text" readonly="" class="form-control" placeholder="Single File">
                    <span class="input-group-btn input-group-s">
                        <button type="button" class="btn btn-just-icon btn-round btn-primary">
                            <i class="material-icons">attach_file</i>
                        </button>
                    </span>
                </div>
            </div>

            <div class="form-group form-file-upload">
                <input type="file" id="inputFile3" multiple="">
                <div class="input-group">
                    <input type="text" readonly="" class="form-control" placeholder="Multiple Files">
                    <span class="input-group-btn input-group-s">
                        <button type="button" class="btn btn-just-icon btn-round btn-info">
                            <i class="material-icons">layers</i>
                        </button>
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
