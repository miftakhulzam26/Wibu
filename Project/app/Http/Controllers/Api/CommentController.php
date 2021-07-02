<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use Dingo\Api\Routing\Helpers;

class CommentController extends Controller
{
    //
    use Helpers;

    public function index()
    {
        return Comment::all();
    }

    public function create(Request $request)
    {
        $comment = new Comment;
        $comment->chapter_id = $request->chapter_id;
        $comment->creator_id = $request->creator_id;
        $comment->content = $request->content;
        $comment->save();

        return "Data Berhasil Masuk";
    }

    public function show($id)
    {
        return Comment::find($id);
    }

    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->chapter_id = $request->chapter_id;
        $comment->creator_id = $request->creator_id;
        $comment->content = $request->content;
        $comment->save();

        return "Data Berhasil Masuk";
    }

    public function update($id, Request $request)
    {
        $creator = $request->creator_id;
        $chapter = $request->chapter_id;
        $content = $request->content;

        $comment = Comment::find($id);
        $comment->chapter_id = $chapter;
        $comment->creator_id = $creator;
        $comment->content = $content;
        $comment->save();

        Return "Data Berhasil di Update";

    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return "Data Berhasil di Delete";
    }
}
