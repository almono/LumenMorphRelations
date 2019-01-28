<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Tag;
use App\Photo;
use App\Video;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function View1()
    {
        $comments = Comment::get();
        $tags = Tag::get();
        $photos = Photo::get();
        $videos = Video::get();

        return view('view1', compact('comments','tags','photos','videos'));
    }

    public function View2()
    {
        $comments = Comment::get();
        $tags = Tag::get();
        $photos = Photo::get();
        $videos = Video::get();

        return view('view2', compact('comments','tags','photos','videos'));
    }

    public function addTag(Request $request)
    {
        try {
            $tag = new Tag();
            $tag->name = $request->get('name');
            $tag->save();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('morph1');
    }

    public function assignPhotoTag(Request $request)
    {
        $tag = Tag::findOrFail($request->get('photo-tag'));
        $photo = Photo::findOrFail($request->get('photo-id'));

        $tag->photos()->save($photo);

        return redirect()->route('morph1');
    }

    public function assignVideoTag(Request $request)
    {
        $tag = Tag::findOrFail($request->get('video-tag'));
        $video = Video::findOrFail($request->get('video-id'));

        $tag->videos()->save($video);

        return redirect()->route('morph1');
    }

}
