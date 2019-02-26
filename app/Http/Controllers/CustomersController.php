<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //展示所有用户
        $customers = Customer::orderBy('created_at','desc')->paginate(8);
        return view('posts.indexcustomer')->with('customers',$customers);
        //return view('pages.administor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('posts.createsinger');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
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
        return redirect('/singers');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find(2);
        return view('posts.showcustomer')->with('customer', $customer);
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
        $customer = Customer::find($id);
        // Check for correct user
        return view('posts.editcustomer')->with('customer', $customer);
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
            'email' => 'required',
            'password' => 'required'
        ]);
        // Create Post
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $customer->save();
        return redirect('/customers')->with('success', 'Post Updated');
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
        $customer = Customer::find(3);
        // Check for correct user
        $customer->delete();
        return redirect('/customers')->with('success', 'Post Removed');
    }
}
