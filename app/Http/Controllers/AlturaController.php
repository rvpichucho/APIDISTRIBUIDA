<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlturaController extends Controller
{
    public function index(){
        return view('pages.altura');
    }
}
