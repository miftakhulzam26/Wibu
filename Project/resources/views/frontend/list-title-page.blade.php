@extends('frontend.layouts/list-template-page')

@section('header')
    Novel List - Novel Inspiration
@endsection
@section('content')
<div class="section text-center">
    <h2 class="title">Novel List</h2>
 @foreach ($title as $item)
 <div class="card card-plain card-blog">
    <div class="row">
        <div class="col-md-2">
            <div class="card-image">
                <img class="img img-raised" src="{{ asset('images/'.$item->cover)  }}" width="100px" height="300px"/>
            </div>
        </div>
        <div class="col-md-6">
            <!--<h6 class="category text-info">Enterprise</h6>-->
            <h4 class="card-title">
                <a href="#pablo">{{$item->name}}</a>
            </h4>
            <p class="card-description">
                {{$item->sinopsis}} <a href="#pablo"> Read More </a>
            </p>
            <p class="author">
                Author : <a href="#pablo"><b>{{$item->creator_id}}</b></a>
            </a>
            <p class="author">
                Genre :
                <span class="label label-default"><a href="http://">Action</a></span>
                <span class="label label-default"><a href="http://">Romance</a></span>
                <span class="label label-default"><a href="http://">Sci-fi</a></span>
                <span class="label label-default"><a href="http://">Fantasy</a></span>
                <span class="label label-default"><a href="http://">Thriller</a></span>
            </a>
        </div>
    </div>
</div>
 @endforeach

        <ul class="pagination pagination-primary">
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

</div>
@endsection
