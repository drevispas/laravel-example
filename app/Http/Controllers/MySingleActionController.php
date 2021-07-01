<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySingleActionController extends Controller
{
    public function __invoke(Request $request)
    {
        return '__invoke() of MySingleActionController';
    }
}
