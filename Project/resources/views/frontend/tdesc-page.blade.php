@extends('frontend/layouts.template')

@section('header')
    Tag Description - Novel Inspiration
@endsection
@section('content')
<div class="container">
    <div class="section text-left">
        <div class="col-md-8">
            <h3>{{$tdesc->tag_name}}</h3>
            <br>
            <p>
                {{$tdesc->tag_desc}}
            </p>
            <br>
        </div>
    </div>
</div>


@endsection
