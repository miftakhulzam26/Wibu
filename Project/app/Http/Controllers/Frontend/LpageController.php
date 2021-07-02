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
        //$latest = DB::table('title')
        //->join('creator', 'title.creator_id', '=', 'creator.creator_id')
        //->join('chapter','title.id','=','chapter.title_id')
        //->select('title.*', 'creator.creator_name','chapter.chapter.name','chapter.chapter_text')
        //->get();

        return view('frontend.landing-page');//,compact('latest'));
    }
}
