<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
class image extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function categorys(){

        $categorys = categorys::all();
        return $this->hasmany(products::class,'category','id');
    }


}
