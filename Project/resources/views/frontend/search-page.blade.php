@extends('frontend/layouts.template')

@section('header')
    Series Finder
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
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>

                </div>
                <div class="features">
                    <h3>Tag </h3>
                    <p class="text-muted">
                        Choose the tag that want to be included.
                    </p>
                    <div class="row">
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                    Unchecked
                                </label>
                            </div>
                        </div>

                </div>
                <div class="features">
                    <h3>Status </h3>
                    <p class="text-muted">
                        Choose the status that want to be included.
                    </p>
                    <div class="col-lg-5 col-md-6 col-sm-3">
                        <select class="selectpicker" data-style="select-with-transition" multiple title="Choose City" data-size="7">
                            <option disabled> Choose Status</option>
                            <option value="2">Completed </option>
                            <option value="3">Hiatus</option>
                            <option value="4">Ongoing</option>
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




@endsection
