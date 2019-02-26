<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Album;
use DB;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = Album::orderBy('created_at','desc')->paginate(8);
        return view('posts.indexalbum')->with('albums',$albums);
        //return view('pages.administor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createalbums');
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
            'name' => 'required',
            'picture' => 'required',
            'describe' => 'required',
            'songnumber' => 'required',
            'publishtime' => 'required'
        ]);
        
        $post = new Album;
        $post->name = $request->input('name');
        $post->picture = $request->input('picture');
        $post->describe = $request->input('describe');
        $post->songnumber = $request->input('songnumber');
        $post->publishtime = $request->input('publishtime');
        $post->save();
        return redirect('/albums')->with('success', 'Album Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find(1);
        return view('posts.showalbum')->with('album', $album);
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
        $album = Album::find($id);
        // Check for correct user
        return view('posts.editalbum')->with('album', $album);
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
            'name' => 'required',
            'picture' => 'required',
            'publishtime' => 'required',
            'describe' => 'required',
            'songnumber' => 'required'
        ]);
        // Create Post
        $album = Album::find($id);
        $album->name = $request->input('name');
        $album->picture = $request->input('picture');
        $album->publishtime = $request->input('publishtime');
        $album->describe = $request->input('describe');
        $album->songnumber = $request->input('songnumber');
        $album->save();
        return redirect('/albums')->with('success', 'Post Updated');
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
        $album = Album::find(1);
        // Check for correct user
        $album->delete();
        return redirect('/albums')->with('success', 'Post Removed');
    }
}
