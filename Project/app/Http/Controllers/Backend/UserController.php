<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index()
    {
        $user = DB::table('users')->where('job', 1)->get();

        return view('backend.user.index',compact('user'));
    }

    public function create()
    {
        $user = null;
        return view('backend.user.create',compact('user'));
    }

    // public function edit($id)
    // {
    //     $creator = DB::table('creator')->where('creator_id',$id)->first();
    //     return view('backend.creator.edit',compact('creator'));
    // }

    // public function update(Request $request)
    // {
    //     DB::table('creator')->where('creator_id',$request->creator_id)->update([
    //         'creator_name' => $request->creator_name,
    //         //'user_profile' => $request->creator_profile,
    //         'creator_email' => $request->creator_email,
    //         'creator_password' => $request->creator_password,
    //         'creator_desc' => $request->creator_desc,
    //     ]);

    //     return redirect()->route('user.index')->with('success','Data Telah Berhasil Diperbarui.');
    // }

    // public function destroy($id)
    // {
    //     DB::table('creator')->where('creator_id',$id)->delete();
    //     return redirect()->route('user.index')->with('success','Data Creator Berhasil Dihapus');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->job = $request->job;
        $user->save();

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Ditambah.');
    }



}

