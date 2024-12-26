<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
class phototController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $add_photo = photo::all();
        return view('admin.manage_photo',compact('add_photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_photo');
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
        $add_photo = new photo;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('public/backend/images/photo/', $filename);
            $add_photo->image = $filename;
        }
        $add_photo->save();
        return redirect('manage_photo')->with('message', 'image add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $add_photo = photo::find($id);
        return view('admin.update_photo',compact('add_photo'));
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
        
        $add_photo = photo::find($id);
        $add_photo->status=$request->input('status');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            if($filename!==''){
                $file->move('public/backend/images/photo/', $filename);
                $add_photo->image = $filename;
            }else{
                $filename = $_FILES['old_image'];
            }
           
        }
        $add_photo->update();
        return redirect('manage_photo')->with('message', 'photo update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_photo = photo::find($id);
        $add_photo->delete();
        return redirect('manage_photo')->with('message','photo Deleted Successfully');
    }
}
