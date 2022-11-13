<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function images (){
        return $this ->hasOne(Image::class,'order_id','id');
    }
    public function subcategories (){
        return $this ->belongsTo(Subcategory::class,'order_id','id');
    }
}
