<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotencialController extends Controller
{
    public function index(){
        return view('pages.potencial');
    }
}
