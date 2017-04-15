<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getWeb(){
    	return view('web');
    }
    public function getHome(){
    	return view('home');
    }
}
