<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal_Controller extends Controller
{
   public function principal(){
      return view('principal');
   }
}
