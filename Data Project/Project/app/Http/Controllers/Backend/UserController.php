<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = DB::table('user')->get();

        return view('backend.user.index',compact('user'));

    }

    //public function view()
    //{
        //DB::select('select * from users')([
            //'user_id' => $request->user_id,
            //'user_name' => $request->user_name,
            //'user_pprofile' => $request->user_pprofile,
            //'user_email' => $request->user_email,
            //'created_at' => $request->created_at,
            //'user_username' => $request->user_username,
            //'user_password' => $request->user_password,
            //'user_desc' => $request->user_desc,
        //]);
    //}

    public function create()
    {
        $user = null;
        return view('backend.user.create',compact('user'));
    }

    public function edit($id)
    {
        $user = DB::table('user')->where('user_id',$id)->first();
        return view('backend.user.edit',compact('user'));
    }

    public function update(Request $request)
    {
        DB::table('user')->where('user_id',$request->user_id)->update([
            'user_name' => $request->user_name,
            //'user_profile' => $request->user_profile,
            'user_email' => $request->user_email,
            'user_username' => $request->user_username,
            'user_password' => $request->user_password,
            'user_desc' => $request->user_desc,
        ]);

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('user')->where('user_id',$id)->delete();
        return redirect()->route('user.index')->with('success','Data User Berhasil Dihapus');
    }
    public function store(Request $request)
    {
        DB::table('user')->insert([
            'user_id' => $request->user_id,
            'user_name' => $request->user_name,
            //'user_profile' => $request->user_profile,
            'user_email' => $request->user_email,
            'created_at' => $request->created_at,
            'user_username' => $request->user_username,
            'user_password' => $request->user_password,
            'user_desc' => $request->user_desc,
        ]);

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Ditambah.');
    }



}

