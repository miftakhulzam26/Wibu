<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Bookmark;
use App\Title;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','bookmark']);
    }
    public function index()
    {
        return view('frontend.bookmark-page');
    }

    public function bookmark() {
        $user_id    = Auth::user()->id;
        $title_id = $request->get('title_id');
        $bookmark   = Bookmark::where('title_id', '=', $title_id)->first();
        $title    = Title::where('id', '=', $title_id)->first();

        // I want to check if the article has been already bookmarked by the same user
        // but this if statement always returns true
        if($bookmark = null) {
            $add = Bookmark::create(array(
                 'user_id' => $user_id,
                 'title_id' => $title_id,
             ));
             return Redirect::url('ftitle/'.$title_id)
               ->with('global', 'Added to bookmark.');

        } else {
            // Does not work
            return Redirect::url('ftitle/'.$title_id)
               ->with('global', 'We were unable to bookmark the article. Please, try again later.');
        };


    }

}
