<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cgi;
class cgiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cgi=cgi::all();
        return view('admin.manage_cgi',compact('cgi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_cgi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);
 
        $file=$request->file('video');
        $file->move('public/backend/cgi',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();
 
        $cgi=new cgi();
        $cgi->video = $file_name;
        $cgi->save();
 
        return redirect('manage_cgi');
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
        $cgi = cgi::find($id);
        $cgi->delete();
        return redirect('manage_cgi')->with('message','cgi Deleted Successfully');
    }
}
