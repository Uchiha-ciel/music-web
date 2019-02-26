<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Song;
use DB;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $songs = Song::orderBy('created_at','desc')->paginate(8);
        return view('posts.indexsong')->with('songs',$songs);
        //return view('pages.administor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createsong');
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
            'actor' => 'required',
            'address' => 'required',
            'publishtime' => 'required'
        ]);
        
        $post = new Song;
        $post->name = $request->input('name');
        $post->picture = $request->input('picture');
        $post->actor = $request->input('actor');
        $post->address = $request->input('address');
        $post->publishtime = $request->input('publishtime');
        $post->save();
        return redirect('/songs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$song=DB::select("select * from songs");    //返回一个二维数组  
        //var_dump($student);        //以节点树的形式输出结果   
        //dd($student);
        $song = Song::find(2);
        //echo $posts->name;
        return view('posts.showsongs')->with('song', $song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        // Check for correct user
        return view('posts.editsong')->with('song', $song);
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
            'actor' => 'required',
            'address' => 'required',
            'publishtime' => 'required'
        ]);
        // Create Post
        $song = Song::find($id);
        $song->name = $request->input('name');
        $song->picture = $request->input('picture');
        $song->actor = $request->input('actor');
        $song->address = $request->input('address');
        $song->publishtime = $request->input('publishtime');
        $song->save();
        return redirect('/songs')->with('success', 'Post Updated');
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
        $song = Song::find(1);
        // Check for correct user
        $song->delete();
        return redirect('/songs')->with('success', 'Post Removed');
    }
}
