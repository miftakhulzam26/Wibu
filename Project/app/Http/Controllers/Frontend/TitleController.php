<?php

namespace App\Http\Controllers\Frontend;

use App\Title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TitleController extends Controller
{
    public function index()
    {

        return view('frontend.title-page',compact('title'));
    }
}
