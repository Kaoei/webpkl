<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    function Index(){
        return view('menu.index');
    }
}
