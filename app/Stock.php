<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
//    protected $fillable = [
//        'ticker'
//    ];
    //
    public function watchers(){
        return $this->belongsToMany(User::class);
    }
}