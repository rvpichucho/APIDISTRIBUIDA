<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CineticaController extends Controller
{
    public function index(){
        return view('pages.cinetica');
    }
}
