<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Genre;

use App\Tag;

use App\Title;

use App\TagTitle;

use App\GenreTitle;

class SfinderController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        $tag = Tag::all();
        $tag_title = TagTitle::all();
        $genre_title = GenreTitle::all();


        return view('frontend.search-page', compact('genre','tag'));
    }
}
