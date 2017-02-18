<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Editora;
use App\Livro;

class LivroController extends Controller
{
    //
    public function index() {
    	   $livros = Livro::all();
	   return view('livro.index', compact('livros'));
    }

    public function cria() {
    	   $editoras = Editora::all();
    	   return view('livro.cria', compact('editoras'));
    }

    public function armazena() {
    	   $this->validate(request(), [
	   	    'nome' => 'required|min:2|max:255',
	   	    'preco' => 'required',
		    'editora_id' => 'required'
	   ]);
	   Livro::create(request()->all());
	   return redirect('/livros');
    }

    public function show(Livro $livro) {
    	   return view('livro.show', compact('livro'));
    }

    public function edicao(Livro $livro) {
    	   $editoras = Editora::all();
    	   return view('livro.edicao', compact('livro','editoras'));
    }

    public function atualiza(Livro $livro) {
    	   $this->validate(request(), [
	   	    'nome' => 'required|min:2|max:255',
	   	    'preco' => 'required'
	   ]);
    	   $livro->fill(request()->all());
    	   $livro->save();
	   return redirect("/livros/$livro->id");
    }
}
