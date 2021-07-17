<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Chapter;
use App\Carousel;
use App\Http\Controllers\Controller;



class LpageController extends Controller
{
    public function index()
    {
        $carousel = Carousel::all();

        $popular = DB::table('title')
        ->orderBy('favorit', 'desc')
        ->get();

        $latest = DB::table('chapter')
        ->join('title', 'chapter.title_id', '=', 'chapter.id')
        ->select('chapter.*', 'title.name', 'title.cover')
        ->orderBy('created_at','desc')
        ->paginate(9);

        return view('frontend.landing-page',compact('carousel','popular','latest'));
    }


}
