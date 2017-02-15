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

    public function postAdd(Request $request){
        $sweet = new Sweet;
        $sweet->name = $request->name;
        $sweet->stock = $request->stock;
        $sweet->save();
        return redirect()->route('home');
    }

    public function postDelete($id){
        $sweet = \App\Sweet::find($id);
        $sweet->delete();
        return redirect()->route('home');
    }
}
