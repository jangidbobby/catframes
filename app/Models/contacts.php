<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;
class contacts extends Model
{
    use HasFactory;
    public $fillable = ['first_name', 'last_name', 'email', 'message'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail ="bobbyjangid3287@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
