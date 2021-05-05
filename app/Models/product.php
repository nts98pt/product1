<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";


    public function categori(){
        return $this->belongsTo('App\product','categori_id','id');

    }
    public function image(){
        return $this->hasMany('App\Models\image','product_id','id');

    }
    public function cart(){
        return $this->hasMany('App\product','','id');

    }

}
