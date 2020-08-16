<?php

namespace App\Http\Controllers;

use App\Cloudapp;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class UtilizesController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Cloudapp $cloudapp){
        return auth()->user()->utilizing()->toggle($cloudapp);
    }



}
