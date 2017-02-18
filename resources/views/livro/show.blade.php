@extends('layouts.master')

@section('title', 'Detalhes do livro')

@section('page-header-content', 'Detalhes do livro')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/livros">
	  Livros
	</a>
      </div>
      <div class="panel-body">
	<a href="/livros/{{$livro->id}}/edicao">
	  Editar
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-primary">

      <div class="panel-heading"><strong>Livro</strong></div>
      
      <ul class="list-group">
	<li class="list-group-item">{{ $livro->nome }}</li>
	<li class="list-group-item">{{ $livro->preco }}</li>
	<li class="list-group-item">{{ $livro->editora->nome }}</li>
      </ul>
    </div>
  </div>
</div>
@endsection
