<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibreController extends Controller
{
    public function index(){
        return view('pages.libre');
    }
}
