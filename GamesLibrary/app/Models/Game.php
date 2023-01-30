<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title','img','type','platform','rating','original_id'];

    function user(){
        return $this->belongsTo(User::class);
    }

}
