<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use DB;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::orderBy('created_at','desc')->paginate(8);
        return view('posts.indexcomment')->with('comments',$comments);
        //return view('pages.administor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createcomments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        
        $post = new Comment;
        $post->comment = $request->input('comment');
        $post->save();
        return redirect('/comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find(1);
        return view('posts.showcomment')->with('comment', $comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comment = Comment::find($id);
        // Check for correct user
        return view('posts.editcomment')->with('comment', $comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'comment' => 'required'
        ]);
        // Create Post
        $comment = Comment::find($id);
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect('/comments')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comment = Comment::find(1);
        // Check for correct user
        $comment->delete();
        return redirect('/comments')->with('success', 'Post Removed');
    }
}
