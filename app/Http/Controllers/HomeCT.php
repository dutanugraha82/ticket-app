<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCT extends Controller
{
    public function index(){
        return view("user.pages.home");
    }

    public function show(){
        return view("user.pages.event");
    }

    public function explore() {
        return view("user.pages.explore");
    }
}
