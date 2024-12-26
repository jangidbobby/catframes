<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{
 
    public function index()
    {
        return view('admin.auth.page-login');
    }  
       
 
    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $details= auth()->user();
            Session::put('name',$details->name);
            return redirect()->intended('dashbaord')
                        ->withSuccess('Signed in');
        }
   
        return redirect("login")->withSuccess('Login details are not valid');
    }
  
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }
   
        return redirect("login")->withSuccess('You are not allowed to access');
    }
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }
}