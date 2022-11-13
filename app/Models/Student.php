<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function user(){
        return $this ->belongsToMany(users::class,'user_id','post_id','id','id');
    }
}
