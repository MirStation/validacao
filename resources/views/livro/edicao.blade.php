@extends('layouts.master')

@section('title', 'Edição do livro')

@section('page-header-content', 'Edição do livro')

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
	<a href="/livros/{{$livro->id}}">
	  Detalhes do livro
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    @if(count($errors) > 0)
	  <div class="alert alert-danger">
	       <ul>
	       @foreach ($errors->all() as $message)
	       <li>{{ $message }}</li>
	       @endforeach
	       </ul>
	  </div>
    @endif
    <form action="/livros/{{$livro->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input name="nome" id="nome" type="text" class="form-control"  value="{{$livro->nome}}">
      </div>
      <div class="form-group">
	<label for="preco">Preço</label>
	<input name="preco" id="preco" type="text" class="form-control" value="{{$livro->preco}}">
      </div>
      <div class="form-group">
	<label for="editora">Editora</label>
	<select>
		<option value="{{$livro->editora_id}}">{{$livro->editora->nome}}</option>
		@foreach($editoras as $editora)
		@if($livro->editora_id != $editora->id)
		<option value="{{$editora->id}}">{{$editora->nome}}</option>
		@endif
		@endforeach
	</select>
      </div>
      <button class="btn btn-primary">Atualizar</button>
    </form>
  </div>
</div>
@endsection
