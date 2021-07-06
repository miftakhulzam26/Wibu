<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;

class UprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('frontend.profile-page');
    }
    public function edit(User $user)
    {
        return view('frontend.edit-profile',compact('user'));
    }
}
