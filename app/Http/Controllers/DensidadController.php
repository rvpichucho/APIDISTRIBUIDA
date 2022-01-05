<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DensidadController extends Controller
{
    public function index(){
        return view('pages.densidad');
    }
}
