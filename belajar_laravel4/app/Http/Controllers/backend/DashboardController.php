<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('backend.dashboard');
    }
}
