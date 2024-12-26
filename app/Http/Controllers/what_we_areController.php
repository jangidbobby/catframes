<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\what_we_are;
class what_we_areController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add_what_we = what_we_are::all();
        return view('admin.manage_what_we_are',compact('add_what_we'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_what_we_are');
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
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        $add_our_work = new what_we_are;
        $add_our_work->name=$request->input('name');
        $add_our_work->title=$request->input('title');
        $add_our_work->descpriton=$request->input('descpriton');
        $add_our_work->link=$request->input('link');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('public/backend/images/what_we_are/', $filename);
            $add_our_work->image = $filename;
        }
        $add_our_work->save();
        return redirect('manage_what_we_are')->with('message', 'image add Successfully');
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
        $what_we_are = what_we_are::find($id);
        return view('admin.update_what_we_are',compact('what_we_are'));
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
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        $add_what_we =  what_we_are::find($id);
        $add_what_we->name=$request->input('name');
        $add_what_we->title=$request->input('title');
        $add_what_we->descpriton=$request->input('descpriton');
        $add_what_we->link=$request->input('link');
        $add_what_we->status=$request->input('status');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            if($filename!==''){
                $file->move('public/backend/images/what_we_are/', $filename);
                $add_what_we->image = $filename;
            }else{
                $filename = $_FILES['old_image'];
            }

        }
        $add_what_we->update();
        return redirect('manage_what_we_are')->with('message', 'image add Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_what_we = what_we_are::find($id);
        $add_what_we->delete();
        return redirect('manage_what_we_are')->with('message','photo Deleted Successfully');
    }
}
