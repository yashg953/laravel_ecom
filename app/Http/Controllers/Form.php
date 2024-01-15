<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    function getData(Request $req){
        //echo "form submitted";
        return $req->input();
    }
}
