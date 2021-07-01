@extends('frontend/layouts.template')

@section('header')
    Series Finder - Novel Inspiration
@endsection

@section('content')

    <div class="container">
        <div class="section text-center">
            <h2 class="title">Series Finder</h2>
            <div class="section text-left">
                <div class="features">
                    <h3>Genre </h3>
                    <p class="text-muted">
                        Choose the genre that want to be included.
                    </p>
                    <div class="row">
                        @foreach ($genre as $item)
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="{{$item->id}}" name="optionsCheckboxes">
                                    {{$item->genre_name}}
                                </label>
                            </div>
                        </div>
                        @endforeach

                </div>
                <div class="features">
                    <h3>Tag </h3>
                    <p class="text-muted">
                        Choose the tag that want to be included.
                    </p>
                    <div class="row">
                        @foreach ($tag as $item)
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="{{$item->id}}" name="optionsCheckboxes">
                                    {{$item->tag_name}}

                            </div>
                        </div>
                        @endforeach



                </div>
                <div class="features">
                    <h3>Status </h3>
                    <p class="text-muted">
                        Choose the status that want to be included.
                    </p>
                    <div class="col-lg-5 col-md-6 col-sm-3">
                        <select class="selectpicker" data-style="select-with-transition" multiple title="Choose Status" data-size="7">
                            <!--<option disabled> Choose Status</option>-->
                            <option value="Completed">Completed </option>
                            <option value="Hiatus">Hiatus</option>
                            <option value="Ongoing">Ongoing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <button class="btn btn-primary">Search</button>
                    <button class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getIds(checkboxName) {
            let checkBoxes = document.getElementsByName(checkboxName);
            let ids = Array.prototype.slice.call(checkBoxes)
                            .filter(ch => ch.checked==true)
                            .map(ch => ch.value);
            return ids;
        }

        function filterResults () {
            let genreIds = getIds("genre");

            let tagIds = getIds("tag");

            let href = 'search?';

            if(brandIds.length) {
                href += 'filter[genre]=' + gebreIds;
            }

            if(catagoryIds.length) {
                href += '&filter[tag]=' + tagIds;
            }

            document.location.href=href;
        }

        document.getElementById("filter").addEventListener("click", filterResults);
    </script>



@endsection
