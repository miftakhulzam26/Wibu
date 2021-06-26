@extends('frontend.layouts/list-template-page')
@section('header')
    Genre List - Novel Inspiration
@endsection
@section('content')
<div class="section text-center">
    <h2 class="title">Genre List</h2>

    <div class="section text-left">
        @foreach ($fgenre as $item)
        <div class="col-md-3">
            <a href="{{ route('gdesc.index', ['id'=>$item->id]) }}">{{$item->genre_name}}</a>
        </div>
        @endforeach


    </div>


    </div>

</div>
@endsection
