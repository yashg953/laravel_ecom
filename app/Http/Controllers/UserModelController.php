<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserModelController extends Controller
{
    function getData(){
        echo User::all();
    }
}
