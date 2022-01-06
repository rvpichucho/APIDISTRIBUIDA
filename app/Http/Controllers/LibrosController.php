<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libro::all();
        return view('pages.libros')->with('libros',$libros);;
    }
}
