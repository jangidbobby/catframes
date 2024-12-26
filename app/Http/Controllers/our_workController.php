<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\our_work;
class our_workController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add_our_work = our_work::all();
        return view('admin.manage_our_work',compact('add_our_work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_our_work');
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
        $add_our_work = new our_work;
        $add_our_work->name=$request->input('name');
        $add_our_work->title=$request->input('title');
        $add_our_work->descpriton=$request->input('descpriton');
        $add_our_work->link=$request->input('link');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('public/backend/images/our_work/', $filename);
            $add_our_work->image = $filename;
        }
        $add_our_work->save();
        return redirect('manage_our_work')->with('message', 'image add Successfully');
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
        $add_our_work = our_work::find($id);
        return view('admin.update_our_work',compact('add_our_work'));
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
        
        $add_our_work = our_work::find($id);
        $add_our_work->name=$request->input('name');
        $add_our_work->title=$request->input('title');
        $add_our_work->descpriton=$request->input('descpriton');
        $add_our_work->link=$request->input('link');
        $add_our_work->status=$request->input('status');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            if($filename!==''){
                $file->move('public/backend/images/our_work/', $filename);
                $add_our_work->image = $filename;
            }else{
                $filename = $_FILES['old_image'];
            }

        }
        $add_our_work->update();
        return redirect('manage_our_work')->with('message', 'image add Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_our_work = our_work::find($id);
        $add_our_work->delete();
        return redirect('manage_our_work')->with('message','photo Deleted Successfully');
    }
}
