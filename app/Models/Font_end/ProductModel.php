<?php

namespace App\Models\Font_end;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public $table ="product";
    public $primaryKey = 'pID';
    public $fillable = 
    [
        'pName', 'pDescription','pImage','pPrice','pQuantity','FeaturedRecent'
    ];
    public $timestamps = false;
}
