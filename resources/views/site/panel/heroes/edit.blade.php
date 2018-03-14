@extends('site.panel.jedi.master')

@section('left-sidebar')
        <h1>Editar Jedi</h1>
	<form action="/jedi/{{ $jedi->id }}" method="POST" enctype="multipart/form-data">
            <h3>Nome</h3>
            <input type="text" name="nome" value="{{ $jedi->nome }}" placeholder="Nome" maxlength="150" style="width: 100%">
	    {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}
            <br>
            <h3>Data de Nascimento</h3>
            <input type="text" name="nascimento" value="{{ $jedi->nascimento }}" placeholder="Data de Nascimento" maxlength="10">
	    {{ ($errors->has('nascimento')) ? $errors->first('nascimento') : '' }}
            <br>
            <h3>Espécie</h3>
            <select name="especie">
	    @foreach($especies as $especie)
	    	<option value="{{ $especie->id }}" {{ $especie->id === $jedi->especie ? "selected" : "" }}> {{ $especie -> name }} </option>
            @endforeach
            </select>
            {{ ($errors->has('especie')) ? $errors->first('especie') : '' }}
            <br>
	    <h3>Gênero</h3>
            <input type="radio" name="genero" value="M" {{ $jedi->genero === "M" ? "checked" : "" }} >&nbsp;Masculino&nbsp;</input>
            <input type="radio" name="genero" value="F" {{ $jedi->genero === "F" ? "checked" : "" }}>&nbsp;Feminino&nbsp;</input>
            <input type="radio" name="genero" value="O" {{ $jedi->genero === "O" ? "checked" : "" }}>&nbsp;Outros&nbsp;</input>
            {{ ($errors->has('genero')) ? $errors->first('genero') : '' }}
            <br>
            <h3>Altura</h3>
            <input type="text" name="altura" value="{{ $jedi->altura }}" placeholder="Altura" maxlength="4">
	    {{ ($errors->has('altura')) ? $errors->first('altura') : '' }}
            <br>
	    <h3>Foto</h3>
            <img src="/images/{{ $jedi->foto }}">
            <br>
            <br>
	    {{ csrf_field() }}
            
	    <input type="file" name="foto" placeholder="Foto">	              
	    {{ ($errors->has('foto')) ? $errors->first('foto') : '' }}
            <br>            
	    <h3>Status</h3>
            <input type="radio" name="status" value="V" {{ $jedi->status === "V" ? "checked" : "" }}>&nbsp;Vivo&nbsp;</input>
            <input type="radio" name="status" value="M" {{ $jedi->status === "M" ? "checked" : "" }}>&nbsp;Morto&nbsp;</input>
            <input type="radio" name="status" value="A" {{ $jedi->status === "A" ? "checked" : "" }}>&nbsp;Aposentado&nbsp;</input>
            <input type="radio" name="status" value="E" {{ $jedi->status === "E" ? "checked" : "" }}>&nbsp;Exilado&nbsp;</input>
            <input type="radio" name="status" value="D" {{ $jedi->status === "D" ? "checked" : "" }}>&nbsp;Corrompido pelo Lado Negro da Força&nbsp;</input>            
            <br>            
            {{ ($errors->has('status')) ? $errors->first('status') : '' }}
            <br>	    
	    <input type="hidden" name="_method" value="put">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <input type="submit" name="name" value="Salvar">
	</form>
@endsection