<?php

namespace App\Http\Controllers\Frontend;

use App\Title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FtitleController extends Controller
{
    public function index()
    {
        // $fgenre = DB::table('genre')->get();
        $title = Title::all();
        return view('frontend.title-page',compact('title'));
    }
    public function show(Title $title){

        $title = Title::find($title);
        return view('frontend.title-page', compact('title'));
    }
}
