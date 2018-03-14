@extends('site.panel.jedi.master')

@section('left-sidebar')
	<h1>Página de detalhe</h1>
	<h3>{{ $detailpage->nome }}</h2>        
        <img src="/images/{{ $detailpage->foto }}">
        <h3>Data de Nascimento</h3>
        <p>{{ $detailpage->nascimento }} </p>
        <h3>Espécie</h3>
	<p>{{ $detailpage->especie }} </p>
        <h3>Gênero</h3>
	<p>{{ $detailpage->genero }} </p>
        <h3>Altura</h3>
	<p>{{ $detailpage->altura }} </p>
        <h3>Status</h3>
	<p>{{ $detailpage->status }} </p>
	<a href="/jedi">Voltar</a>
@endsection