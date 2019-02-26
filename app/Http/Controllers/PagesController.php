<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function genres()
    {
        return view('pages.genres');
    }

    
    /**
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        return view('pages.events');
    }

    
    /**
     * @return \Illuminate\Http\Response
     */
    public function listen()
    {
        return view('pages.listen');
    }

    
    /**
     * @return \Illuminate\Http\Response
     */
    public function video1()
    {
        return view('pages.video');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function videodetail()
    {
        return view('pages.videodetail');
    }

    public function administor()
    {
        return view('pages.administor');
    }

    public function add()
    {
        return view('pages.administor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
