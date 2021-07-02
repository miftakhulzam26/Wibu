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
        $tdetail = Title::all();
        return view('frontend.list-title-page',compact('tdetail'));
    }
    public function show(Title $tdetail){
        return view('frontend.title-page', compact('tdetail'));
    }
}
