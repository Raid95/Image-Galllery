<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideosController extends Controller
{
    public function index() {
        $videos = Video::get();
        
        return view('videos.index')->with('videos', $videos);
    }

    public function create() {
        return view ('videos.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);

        $filenameWithExtension = $request->file('link')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        
        $extension = $request->file('link')->getClientOriginalExtension();
        
        $filenameToStore = $filename . '_' . time() . '.' . $extension;
        
        $request->file('link')->storeAs('public/video_covers', $filenameToStore);

        $video = new Video();
        $video->name = $request->input('name');
        $video->description = $request->input('description');
        $video->link = $filenameToStore;
        $video->save();

        return redirect('/videos')->with('success', 'Videos upload successfully!');
    }

    public function show($id) {
        $video = Video::find($id);

        return view('videos.show')->with('video', $video);

    }
}
