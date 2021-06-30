<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GdescController extends Controller
{
    // public function index(Request $request, $id)
    // {
    //     $genre = DB::table('genre')
    //     ->Where('id','=', $id)
    //     ->get();

    //     return view('frontend.gdesc-page',compact('genre'));
    // }
    public function index()
    {
        // $fgenre = DB::table('genre')->get();
        $gdesc = Genre::all();
        return view('frontend.list-genre-page',compact('gdesc'));
    }
    public function show(Genre $gdesc){
        return view('frontend.gdesc-page', compact('gdesc'));
    }
}
