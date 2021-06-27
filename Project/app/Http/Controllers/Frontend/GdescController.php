<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GdescController extends Controller
{
    public function index(Request $request, $id)
    {
        $genre = DB::table('genre')
        ->Where('id','=', $id)
        ->get();

        return view('frontend.gdesc-page',compact('genre'));
    }
}
