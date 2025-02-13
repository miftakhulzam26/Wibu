<?php

namespace App\Http\Controllers\Backend;

use App\Chapter;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    //
    public function index(){
        $chapter = Chapter::orderBy('chapter_id')->paginate(5);
        return view('backend.chapter.index', compact('chapter'));
    }
    public function create(){
        return view('backend.chapter.create', compact('chapter'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'tts' => 'required',
            'title_id' => 'required'
        ]);

        $chapter = new Chapter;
        $chapter->chapter_title = $request->title;
        $chapter->chapter_text = $request->text;
        $chapter->chapter_tts = $request->tts;
        $chapter->title_id = $request->title_id;
        $chapter->save();
        return redirect()->route('chapter.index')->with('success','Chapter has been created successfully.');
    }
    public function edit(Chapter $chapter){
        return view('backend.chapter.edit',compact('chapter'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'tts' => 'required',
            'title_id' => 'required'
        ]);
        $chapter = Chapter::find($id);
        $chapter->chapter_title = $request->title;
        $chapter->chapter_text = $request->text;
        $chapter->chapter_tts = $request->tts;
        $chapter->title_id = $request->title_id;
        $chapter->save();
        return redirect()->route('chapter.index')->with('success','Chapter has been updated successfully');
    }
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();

        return redirect()->route('chapter.index')
                        ->with('success','Post has been deleted successfully');
    }
}
