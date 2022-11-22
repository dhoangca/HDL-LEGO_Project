<?php

namespace App\Models\Font_end;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public $table ="category";
    public $primaryKey = 'CategoryID';
    public $fillable = 
    [
        'CategoryName', 'CategoryDescription',
    ];
    public $timestamps = false;
}
