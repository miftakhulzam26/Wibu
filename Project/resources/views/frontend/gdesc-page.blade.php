@extends('frontend/layouts.template')

@section('header')
    Genre Description - Novel Inspiration
@endsection
@section('content')
<div class="container">
    <div class="section text-left">
        <div class="col-md-8">

            <h3>{{$gdesc->genre_name}}</h3>
            <br>
            <p>
                {{$gdesc->genre_desc}}
            </p>
            <br>


        </div>
    </div>
</div>


@endsection
