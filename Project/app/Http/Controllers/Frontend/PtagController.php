<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class PtagController extends Controller
{
    public function index()
    {
        return view('frontend.list-tag-page');
    }
}
