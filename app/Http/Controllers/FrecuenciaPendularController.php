<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrecuenciaPendularController extends Controller
{
    public function index(){
        return view('pages.frecuencia-pendular');
    }
}
