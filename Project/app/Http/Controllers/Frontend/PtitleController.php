<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Title;



class PtitleController extends Controller
{
    public function index()
    {
    //    $title = Title::all();
    //    $title = Title::orderBy('id')->paginate(5);

    //    return view('frontend.list-title-page',['title' => $title]);

    $ftitle = DB::table('title')
            ->join('creator', 'title.creator_id', '=', 'creator.creator_id')
            ->select('title.*', 'creator.creator_name')
            ->get();
    return view('frontend.list-title-page',compact('ftitle'));
    }

}
