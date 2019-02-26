<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Singer;
use DB;

class SingersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $singers = Singer::orderBy('created_at','desc')->paginate(8);
        return view('posts.indexsinger')->with('singers',$singers);
        //return view('pages.administor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createsinger');
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
            'fansnum' => 'required',
            'describe' => 'required'
        ]);
        
        $post = new Singer;
        $post->name = $request->input('name');
        $post->picture = $request->input('picture');
        $post->fansnum = $request->input('fansnum');
        $post->describe = $request->input('describe');
        $post->save();
        return redirect('/singers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singer = Singer::find(3);
        return view('posts.showsingers')->with('singer', $singer);
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
        $singer = Singer::find($id);
        // Check for correct user
        return view('posts.editsinger')->with('singer', $singer);
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
            'fansnum' => 'required',
            'describe' => 'required'
        ]);
        // Create Post
        $singer = Singer::find($id);
        $singer->name = $request->input('name');
        $singer->picture = $request->input('picture');
        $singer->fansnum = $request->input('fansnum');
        $singer->describe = $request->input('describe');
        $singer->save();
        return redirect('/singers')->with('success', 'Post Updated');
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
        $singer = Singer::find(3);
        // Check for correct user
        $singer->delete();
        return redirect('/singers')->with('success', 'Post Removed');
    }
}
