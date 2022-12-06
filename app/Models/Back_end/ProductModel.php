<?php

namespace App\Models\Back_end;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ProductModel extends Model
{
    use HasFactory;
    public $table ="product";
    public $primaryKey = 'pID';
    public $fillable = 
    [
        'pName', 'pDescription','pImage','pPrice','pPricePro','pQuantity','FeaturedRecent'
    ];
    public $timestamps = false;
}
