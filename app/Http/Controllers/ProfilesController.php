<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class ProfilesController extends Controller
{

    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }
}
