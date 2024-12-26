<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;
class clientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add_client = clients::all();
        return view('admin.manage_our_clients',compact('add_client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.add_our_clients');
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
        $add_client = new clients;
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('public/backend/images/clients/', $filename);
            $add_client->image = $filename;
        }

        $add_client->save();
        return redirect('manage_our_clients')->with('message', 'support Upload Successfully');
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
        $add_client = clients::find($id);
        return view('admin.update_our_clients',compact('add_client'));
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
        $add_client = clients::find($id);
        $add_client->status = $request->input('status');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            if($filename!==''){
                $file->move('public/backend/images/clients/', $filename);
                $add_client->image = $filename;
            }else{
                $filename = $_FILES['old_image'];
            }

        }

        $add_client->update();
        return redirect('manage_our_clients')->with('message', 'support update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_client = clients::find($id);
        $add_client->delete();
        return redirect('manage_our_clients')->with('message','support Deleted Successfully');
    }
}
