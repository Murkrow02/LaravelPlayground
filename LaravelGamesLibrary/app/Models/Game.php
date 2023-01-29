<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $appends = ['title','rating'];

    function user(){
        return $this->belongsTo(User::class);
    }

}
