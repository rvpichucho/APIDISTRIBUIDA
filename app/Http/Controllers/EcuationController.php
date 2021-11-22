<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcuationController extends Controller
{
    public function index(){
        return view('pages.ecuacion');
    }
}
