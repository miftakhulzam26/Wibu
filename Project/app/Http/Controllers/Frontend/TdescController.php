<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TdescController extends Controller
{
    public function index()
    {
        $tdesc = Tag::all();
        return view('frontend.list-tag-page',compact('tdesc'));
    }

    public function show(Tag $tdesc){
        return view('frontend.tdesc-page', compact('tdesc'));
    }
}
