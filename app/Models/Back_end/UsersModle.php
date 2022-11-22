<?php

namespace App\Models\Back_end;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UsersModle extends Model
{
    use HasFactory;
    public $table ="users";
    public $primaryKey = 'uID';
    public $fillable = 
    [
        'uName', 'uUsername','uPassword','uEmail','uEmail','uImage','Admin','User','uPhoneNumber','Address'
    ];
    public $timestamps = false;
}
