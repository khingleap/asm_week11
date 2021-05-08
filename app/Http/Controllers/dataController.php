<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataController extends Controller
{
    public function main()
    {
        return view('Posts.data');
    }
}
