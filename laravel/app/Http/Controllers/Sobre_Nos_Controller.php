<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobre_Nos_Controller extends Controller
{
    public function sobrenos(){
        return view('sobrenos');
    }
}
