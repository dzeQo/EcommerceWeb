<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function comments(){
        return $this->hasMany('App\models\Comments')->orderBy('id' , 'desc')->where('status' , 1);
    }
}
