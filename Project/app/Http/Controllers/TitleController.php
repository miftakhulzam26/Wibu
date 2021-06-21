<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Title;


class TitleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $title = DB::table('title')->get();

        return view('backend.title.index',compact('title'));

    }

    public function create()
    {
        $user = null;
        return view('backend.title.create',compact('title'));
    }

    public function edit($id)
    {
        $title = DB::table('title')->where('title_id',$id)->first();
        return view('backend.title.edit',compact('title'));
    }

    public function update(Request $request,$id)
    {
        // DB::table('title')->where('title_id',$request->title_id)->update([
        //     'title_name' => $request->title_name,
        //     //'title_cover' => $request->title_cover,
        //     'title_sinopsis' => $request->title_sinopsis,
        //     //'favorit' => $request->favorit,
        //     'user_id' => $request->user_id,
        //     'created_at' => $request->created_at,
        //     'updated_at' => $request->updated_at,
        // ]);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $title = Title::find($id);

        if($request->hasFile('cover')){
            $request->validate([
              'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file           = $request->file('cover');
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();

            //memindahkan file ke folder tujuan
            $file->move('file_upload',$file->getClientOriginalName());
            $title->title_cover = $nama_file;
            //mengambil data file yang diupload
        }

        $title->title_name = $request->title;
        $title->title_sinopsis = $request->description;
        $title->user_id = $request->pengarang;
        $title->save();
        return redirect()->route('title.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('title')->where('title_id',$id)->delete();
        return redirect()->route('title.index')->with('success','Data User Berhasil Dihapus');
    }
    public function store(Request $request)
    {
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
        // DB::table('title')->insert([

        // ]);
        Title::create([
            'title_name' => $request->judul,
            'title_cover' => $nama_file,
            'user_id' => $request->pengarang,
            'title_sinopsis' => $request->sinopsis,
        ]);
        // // DB::table('title')->insert([
        // //     'title_id' => $request->title_id,
        // //     'title_name' => $request->title_name,
        // //     'title_cover' => $request->nama_file,
        // //     'title_sinopsis' => $request->title_sinopsis,
        // //     // 'title_favorit' => $request->title_favorit,
        // //     'user_id' => $request->user_id,
        // //     'created_at' => $request->created_at,
        // //     'updated_at' => $request->updated_at,
        // // ]);
        // $this->validate($request, [
		// 	'title_cover' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		// ]);
        // //mengambil data file yang diupload
        // $file           = $request->file('title_cover');
        // //mengambil nama file
        // $nama_file      = $file->getClientOriginalName();

        // //memindahkan file ke folder tujuan
        // $file->move('file_upload',$file->getClientOriginalName());


        // DB::table('title')->insert([
        //     'title_name' => $request->title_name,
        //     'title_cover' => $nama_file,
        //     'title_sinopsis' => $request->title_sinopsis,
        //     'user_id' => $request->title_author,
        // ]);

        // //menyimpan data ke database

        // // $file =  $request->file('file');
        // // $nama_file = time()."_".$file->getClientOriginalName();

        // // $tujuan_upload = 'data_file';
		// // $file->move($tujuan_upload,$nama_file);

        // // Title::create([
        //     // // 'title_id' => $request->title_id,
        //     // 'title_name' => $request->title_name,
        //     // 'title_cover' => $nama_file,
        //     // 'title_sinopsis' => $request->title_sinopsis,
        //     // // 'title_favorit' => $request->title_favorit,
        //     // 'user_id' => $request->user_id,
        //     // // 'created_at' => $request->created_at,
        //     // // 'updated_at' => $request->updated_at,
        // // ]);
        return redirect()->route('title.index')->with('success','Data Telah Berhasil Ditambah.');
    }
}
