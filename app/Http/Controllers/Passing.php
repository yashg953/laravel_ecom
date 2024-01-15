<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Passing extends Controller
{
    //
    function load_view($user)
    {
        return view("passing",["user"=>$user]);
    }
}
