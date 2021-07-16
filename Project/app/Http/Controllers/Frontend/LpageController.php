<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Chapter;
use App\Http\Controllers\Controller;



class LpageController extends Controller
{
    public function index()
    {
        $popular = DB::table('title')
        ->orderBy('favorit', 'desc')
        ->get();

        $latest = DB::table('chapter')
        ->join('title', 'chapter.title_id', '=', 'chapter.id')
        ->select('chapter.*', 'title.name', 'title.cover')
        ->orderBy('created_at','asc')
        ->paginate(10);

        return view('frontend.landing-page',compact('popular','latest'));
    }


}
