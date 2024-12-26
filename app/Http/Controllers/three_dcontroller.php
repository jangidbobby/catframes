<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Three_d;
class three_dcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Three_d = Three_d::all();
        return view('admin.manage_3d',compact('Three_d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_3d');
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
        $Three_d = new Three_d;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('public/backend/images/3d/', $filename);
            $Three_d->image = $filename;
        }
        $Three_d->save();
        return redirect('manage_3d')->with('message', 'image add Successfully');
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
        $Three_d = Three_d::find($id);
        return view('admin.update_3d',compact('Three_d'));
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
        $Three_d = Three_d::find($id);
        $Three_d->status=$request->input('status');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            if($filename!==''){
                $file->move('public/backend/images/3d/', $filename);
                $Three_d->image = $filename;
            }else{
                $filename = $_FILES['old_image'];
            }
           
        }
        $Three_d->update();
        return redirect('manage_3d')->with('message', 'photo update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Three_d = Three_d::find($id);
        $Three_d->delete();
        return redirect('manage_3d')->with('message','photo Deleted Successfully');
    }
}
