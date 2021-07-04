<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['job','auth']);
    }
    public function index()
    {
        $creator = DB::table('creator')->count();
        $genre = DB::table('genre')->count();
        $tag = DB::table('tag')->count();
        $chapter = DB::table('chapter')->count();
        $users = DB::table('users')->count();
        $title = DB::table('title')->count();
        return view('backend.index',compact('creator','genre','tag','chapter','users','title'));
    }
}
