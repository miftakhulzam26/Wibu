<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Chapter;

class FchapterController extends Controller
{
    //
    public function index()
    {
        $chapter = Chapter::all();

        return view('frontend.chapter-page',compact('chapter'));
    }

    public function show(Chapter $chapter){
        return view('frontend.chapter-page', compact('chapter'));
    }
}
