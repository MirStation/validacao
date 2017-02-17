<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
    //
    public function index() {
    	   $editoras = Editora::all();
           return view('editora.index', compact('editoras'));
    }

    public function cria() {
    	   return view('editora.cria');
    }

    public function armazena() {
    	   $this->validate(request(), [
	   	    'nome' => 'required|min:2|max:255',
	   	    'email' => 'required|email'
	   ]);
    	   Editora::create(request()->all());
           return redirect('/editoras');
    }
}
