<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $affiliationsType = [
        'accademia' => 'Male',
        'other' => 'Other',
        'industry' => 'Industry',
    ];

    public function getGenders()
    {
        return $this->affiliationsType;
    }
//https://sampo.co.uk/blog/using-enums-in-laravel

    public  function user(){
        return $this->belongsTo(User::class);

    }
}
