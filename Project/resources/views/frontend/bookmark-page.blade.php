@extends('frontend/layouts.template')
@section('header')
    Bookmark Page - Novel Inspiration
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Reading List</h3>
        </div>
        <div class="col-md-8 col-md-offset-2">
        <h4><small>Bookmarked Novel</small></h4>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Spirit Chronicle</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Spirit Chronicle</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Spirit Chronicle</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Spirit Chronicle</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Spirit Chronicle</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
