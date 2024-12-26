<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function image(){
        return $this->hasmany(image::class,'category','id');
   }


   public function category(){

       $categorys = categorys::all();
       return $this->hasmany(products::class,'category','id','slug');
   }
}
