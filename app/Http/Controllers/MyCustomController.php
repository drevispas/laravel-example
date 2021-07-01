<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCustomController extends Controller
{
    //
    public function make()
    {
        return response()->make('make() of MyCustomController',201);
    }

    public function json(){
        return response()->json(['a' => 1, 'b' => 2, 'c'=>[11,12,13],'d'=>['d'=>4]]);
    }
}
