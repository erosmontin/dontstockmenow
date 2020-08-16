<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class WatchesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Stock $stock){
        return auth()->user()->watching()->toggle($stock);
    }
}
