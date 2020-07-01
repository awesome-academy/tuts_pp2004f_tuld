<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getHome(){
        return view('project1.home');
    }
    public function getMaster(){
        return view('project1.master');
    }
    public function getNavbar(){
        return view('project1.navbar');
    }
}
