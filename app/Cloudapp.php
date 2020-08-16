<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloudapp extends Model
{
    //
    public function utilizers(){
        return $this->belongsToMany(User::class);
    }
}
