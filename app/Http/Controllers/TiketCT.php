<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketCT extends Controller
{
  public function index(){
    return view('admin.ticket.index');
  }
}
