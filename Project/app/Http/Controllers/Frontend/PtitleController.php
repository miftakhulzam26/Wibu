<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Title;

use App\Creator;

class PtitleController extends Controller
{
    public function index()
    {
        //$title = DB::table('title')
        //        ->leftJoin('creator', 'title.creator_id ','=','creator.creator_id')
        //        ->get();
        $title = Title::orderBy('id')->paginate(5);

        return view('frontend.list-title-page',compact('title'));
    }
}
