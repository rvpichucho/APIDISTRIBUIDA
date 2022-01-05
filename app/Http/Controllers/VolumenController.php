<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolumenController extends Controller
{
    public function index(){
        return view('pages.volumen');
    }
}
