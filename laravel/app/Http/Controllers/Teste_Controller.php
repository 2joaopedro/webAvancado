<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste_Controller extends Controller
{
   public function teste(int $p1, int $p2){
      //echo"A soma de $p1 + $p2 é:".($p1+$p2);
      //return view('teste', ['p1' => $p1, 'p2' => $p2]); //Array associativo
      //return view('teste', compact('p1', 'p2')); //Compact
      return view('teste')->with('p1', $p1)->with('p2', $p2); //With()
   }
}