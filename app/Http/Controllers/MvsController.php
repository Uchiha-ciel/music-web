<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mv;
use DB;

class MvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mvs = Mv::orderBy('created_at','desc')->paginate(8);
        return view('posts.indexmv')->with('mvs',$mvs);
        //return view('pages.administor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createmv');
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
            'cover' => 'required',
            'actor' => 'required',
            'address' => 'required',
            'publishtime' => 'required'
        ]);
        
        $post = new Mv;
        $post->name = $request->input('name');
        $post->cover = $request->input('cover');
        $post->actor = $request->input('actor');
        $post->address = $request->input('address');
        $post->publishtime = $request->input('publishtime');
        $post->save();
        return redirect('/mvs')->with('success', 'MV Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mv = Mv::find(1);
        return view('posts.showmvs')->with('mv', $mv);
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
        $mv = Mv::find($id);
        // Check for correct user
        return view('posts.editmv')->with('mv', $mv);
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
            'cover' => 'required',
            'actor' => 'required',
            'address' => 'required',
            'publishtime' => 'required'
        ]);
        // Create Post
        $mv = Mv::find($id);
        $mv->name = $request->input('name');
        $mv->cover = $request->input('cover');
        $mv->actor = $request->input('actor');
        $mv->address = $request->input('address');
        $mv->publishtime = $request->input('publishtime');
        $mv->save();
        return redirect('/mvs')->with('success', 'Post Updated');
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
        $mv = Mv::find(1);
        // Check for correct user
        $mv->delete();
        return redirect('/mvs')->with('success', 'Post Removed');
    }
}
