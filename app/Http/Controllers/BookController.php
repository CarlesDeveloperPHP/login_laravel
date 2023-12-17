<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('books.index');
    }

    public function create(){
        return view('books.create');
    }

    public function show($libro){
        
        //return view('books.show', ['libro' => $libro]); Es lo mismo que compact pero han de coincidir el nombre de la variable
        return view('books.show', compact('curso'));
    }
}
