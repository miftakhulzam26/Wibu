<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 8 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 Post CRUD Tutorial</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($title as $post)
        <tr>
            <td>{{ $post->title_id }}</td>
            <td><img src="{{asset('images')}}/{{$post->title_cover}}" height="75" width="75" alt="" /></td>
            <td>{{ $post->title_name }}</td>
            <td>{{ $post->title_sinopsis }}</td>
            <td>
                {{-- <form action="{{ route('posts.destroy',$post->title_id) }}" method="POST"> --}}

                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->title_id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $title->links() !!}

</body>
</html>
