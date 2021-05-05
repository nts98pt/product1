<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categori extends Model
{
    use HasFactory;
    protected $table = "categoris";

    public function product(){
        return $this->hasMany('App\categori','','id');

    }
}
