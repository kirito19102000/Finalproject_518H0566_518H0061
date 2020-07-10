<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class TestController extends Controller
{
    public function Test1()
    {
    	print_r(Auth::user()->username);
    }
}
