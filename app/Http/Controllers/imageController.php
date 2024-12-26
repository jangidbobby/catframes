<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
use App\Models\category;
class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add_product = image::with('category')->get();
       return view('admin.manage_image',compact('add_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_image');
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
        
        $add_image = new image;
        $add_image->category_id=$request->input('category_id');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('public/backend/images/image/', $filename);
            $add_image->image = $filename;
        }
        $add_image->save();
        return redirect('manage_image')->with('message', 'image add Successfully');
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
        $category = category::all();
        $add_image = image::with('category')->find($id);
        return view('admin.update_image',compact('add_image','category'));
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
        
        $add_image = image::find($id);
        $add_image->category_id=$request->input('category_id');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            if($filename!==''){
                $file->move('public/backend/images/image/', $filename);
                $add_image->image = $filename;
            }else{
                $filename = $_FILES['old_image'];
            }
           
        }
        $add_image->update();
        return redirect('manage_image')->with('message', 'image update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_image = image::find($id);
        $add_image->delete();
        return redirect('manage_image')->with('message','image Deleted Successfully');
    }
}
