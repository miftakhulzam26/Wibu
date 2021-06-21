<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Upload;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function index(){
        //ambil data dari database
        $data = Upload::all();

        //passing data ke view
        return view('view_upload')->with('data', $data);
    }

    public function store(Request $request){

        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate($request, [
            'cover' => 'required|image',
            // 'title_name'    => 'required',
            // 'title_sinopsis'    => 'required',
            // 'user_id'    => 'required'
            'judul' => 'required',
            'pengarang' => 'required',
            'sinopsis' => 'required',
        ]);

        //mengambil data file yang diupload
        $file           = $request->file('cover');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file_upload',$file->getClientOriginalName());


        // $upload = new Upload;
        // $upload->cover       = $nama_file;
        // $upload->judul = $request->input('judul');
        // $upload->pengarang = $request->input('pengarang');
        // $upload->sinopsis = $request->input('sinopsis');
        // // $upload->keterangan = $request->input('keterangan');

        // //menyimpan data ke database
        // $upload->save();

        DB::table('upload')->insert([
            'judul' => $request->judul,
            'cover' => $nama_file,
            'pengarang' => $request->pengarang,
            'sinopsis' => $request->sinopsis,
        ]);

        //kembali ke halaman sebelumnya
        return back();
    }
}
