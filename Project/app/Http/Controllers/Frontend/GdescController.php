<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GdescController extends Controller
{
    public function index(Genre $genre)
    {
        $genre = DB::table('genre')->get();
        return view('frontend.gdesc-page',compact('genre'));
    }
}
