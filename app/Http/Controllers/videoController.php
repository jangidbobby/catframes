<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video=video::all();
        return view('admin.manage_video',compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $video = new video;
        $video->link = $request->input('link');
        $video->category = $request->input('category');
        $video->save();
 
        return redirect('manage_video');
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
        $video = video::find($id);
        return view('admin.update_video',compact('video'));
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
        $video = video::find($id);
        $video->link = $request->input('link');
        $video->category = $request->input('category');
        $video->status = $request->input('status');
        $video->update();
 
        return redirect('manage_video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = video::find($id);
        $video->delete();
        return redirect('manage_viedo')->with('message','viedo Deleted Successfully');
    }
}
