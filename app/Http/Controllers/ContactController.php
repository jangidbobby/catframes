<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;
class ContactController extends Controller
{
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('contacts_us');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
  
        Contacts::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us.']);
    }
}
