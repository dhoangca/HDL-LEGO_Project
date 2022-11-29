<?php

namespace App\Models\Font_end;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class LoginAndRegisterModel extends Authenticatable
{
    use HasFactory;

    // public $primaryKey = 'uID';
    // public $fillable = 
    // [
    //     'uName', 'uUsername','uPassword','uEmail','uEmail','uImage','role','uPhoneNumber','Address'
    // ];
    // public $timestamps = false;

    protected $table = "users"; 

    protected $fillable=['uName', 'uUsername','uPassword','uEmail','uEmail','uImage','role','uPhoneNumber','Address']; 

    protected $primaryKey ='uID'; 

    public $timestamps=false; 
}
