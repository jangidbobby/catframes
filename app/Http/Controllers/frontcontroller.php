<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
Use App\Models\Three_ds;
use Illuminate\Support\Facades\DB;
class frontcontroller extends Controller
{
    
    public function create(){
        $result['categories'] = DB::table('categories')
        ->where(['status'=>1])
        ->get(); 

        return view('admin.add_image',$result);
    }

    public function index(){

        $result['what_we_ares'] = DB::table('what_we_ares')
        ->where(['status'=>1])
        ->limit(1)
        ->get(); 

        $result['our_works'] = DB::table('our_works')
        ->where(['status'=>1])
        ->orderBy('id', 'DESC')
        ->get(); 

        $result['clients'] = DB::table('clients')
        ->where(['status'=>1])
        ->orderBy('id', 'DESC')
        ->get(); 
        return view('index',$result);
        
    }


    
      public function image(){
        $result['images'] = DB::table('images')
        ->where(['status'=>1])
        ->where(['category_id'=>4])
        ->orderBy('id', 'DESC')
        ->get(); 

        return view('beauty-and-personal-care',$result);
    }

    public function image2(){
        $result['images'] = DB::table('images')
        ->where(['status'=>1])
        ->where(['category_id'=>5])
        ->orderBy('id', 'DESC')
        ->get(); 

        return view('electronics',$result);
    }

 public function image3(){
        $result['images'] = DB::table('images')
        ->where(['status'=>1])
        ->where(['category_id'=>6])
        ->orderBy('id', 'DESC')
        ->get(); 

        return view('fashion',$result);
        
    }



    public function photo(){
        $result['categories'] = DB::table('categories')
        ->where(['status'=>1])
        ->get(); 

        return view('photos',$result);
    }

    public function gallery($id){
        $result['images'] = DB::table('images')
        ->where(['status'=>1])
        ->where(['category_id'=>$id])
        ->get(); 

        return view('gallery',$result);
    }


    public function video(){
    
        return view('video');
    }



    public function videoview(){
        $result['videos'] = DB::table('videos')
        ->where(['status'=>1])
        ->where(['category'=>'youtube'])
        ->get(); 

        return view('video-view',$result);
    }

    public function reels(){
        $result['videos'] = DB::table('videos')
        ->where(['status'=>1])
        ->where(['category'=>'reels'])
        ->get(); 

        return view('reels-view',$result);
    }

    public function three_d(){
        $result['Three_ds'] = DB::table('three_ds')
        ->where(['status'=>1])
        ->get(); 

        return view('3d',$result);
    }

    public function cgi(){
        $result['cgis'] = DB::table('cgis')
        ->where(['status'=>1])
        ->get(); 

        return view('cgi',$result);
    }



}
