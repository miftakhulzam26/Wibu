<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h2 class="alert alert-success text-center">
            Cara Input dan Tampil Data Tanpa Reload dengan Ajax Jquery
        </h2>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        {{-- jika mengirim file wajib menggunakan enctype="multipart/form-data" --}}
                        <form action="{{url('upload/proses')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Input File</label>
                                <input type="file" class="form-control" id="nama" name="cover">
                            </div>
                            {{-- pesan error  --}}
                            @error('cover')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputPassword1">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            {{-- pesan error  --}}
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pengarang</label>
                                <input type="text" name="pengarang" class="form-control">
                            </div>
                            {{-- pesan error  --}}
                            @error('pengarang')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sinopsis</label>
                                <textarea name="sinopsis" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            {{-- pesan error  --}}
                            @error('sinopsis')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" id="tombol-simpan" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">File</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- menampilkan data  --}}
                        @foreach ($data as $key=>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                {{-- jika ekstensi file adalah png, jpg atau jpeg maka tampilkan gambar  --}}
                                @if( in_array(pathinfo($item->cover, PATHINFO_EXTENSION), ['png', 'jpg', 'JPEG']))
                                    <img src="{{asset('file_upload')}}/{{$item->cover}}" height="60px" width="40px">
                                @else
                                    <img src="{{asset('file_upload')}}/{{$item->cover}}" height="60px" width="40px">
                                @endif
                            </td>
                            <td>{{$item->judul}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
