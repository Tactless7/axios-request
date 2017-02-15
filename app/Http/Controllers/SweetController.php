<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sweet;

class SweetController extends Controller
{
    public function getList(){
      $sweets = \App\Sweet::all();
      return view('sweets.list', ['sweets' => $sweets]);
    }
}
