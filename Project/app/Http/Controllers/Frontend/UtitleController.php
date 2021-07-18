<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Title;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UtitleController extends Controller
{
    //
    public function index()
    {
        return view('frontend.u-title-page');
    }
    public function create(){
        return view('frontend.add-novel-page');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'favorit' => 'required',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'sinopsis' => 'required',
            'pengarang' => 'required',
        ]);

        // $path = $request->file('image')->store('public/images');
        //mengambil data file yang diupload
        $file           = $request->file('cover');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('frontend/assets/img/novel/',$file->getClientOriginalName());

        $post = new Title;

        $post->name = $request->judul;
        $post->favorit = $request->favorit;
        $post->sinopsis = $request->sinopsis;
        $post->cover = $nama_file;
        $post->creator_id = $request->pengarang;


        $post->save();


        return redirect()->route('utitle.index');
    }
    public function show($id)
    {
        $novel = Title::find($id);
        $user = DB::select('select * from users where id = ?', [$novel->creator_id]);
        $chapter = DB::select('select * from chapter where title_id = ?', [$novel->id]);
        $genre = DB::select('select * from genre_title where title_id = ?', [$novel->id]);
        return view('frontend.u-title-page',compact('novel','user','chapter','genre'));
    }
}
