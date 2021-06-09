<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class TitleController extends Controller
{
    public function index()
    {
        $title = DB::table('user')->get();

        return view('backend.title.index',compact('title'));

    }

    public function create()
    {
        $user = null;
        return view('backend.title.create',compact('title'));
    }

    public function edit($id)
    {
        $user = DB::table('title')->where('title_id',$id)->first();
        return view('backend.title.edit',compact('title'));
    }

    public function update(Request $request)
    {
        DB::table('title')->where('title_id',$request->title_id)->update([
            'title_name' => $request->title_name,
            //'title_cover' => $request->title_cover,
            'title_sinopsis' => $request->title_sinopsis,
            //'favorit' => $request->favorit,
            'user_id' => $request->user_id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);

        return redirect()->route('title.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('title')->where('title_id',$id)->delete();
        return redirect()->route('title.index')->with('success','Data User Berhasil Dihapus');
    }
    public function store(Request $request)
    {
        DB::table('title')->insert([
            'title_id' => $request->title_id,
            'title_name' => $request->title_name,
            //'title_cover' => $request->title_cover,
            'title_sinopsis' => $request->title_sinopsis,
            //'favorit' => $request->favorit,
            'user_id' => $request->user_id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);

        return redirect()->route('title.index')->with('success','Data Telah Berhasil Ditambah.');
    }
}
