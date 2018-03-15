@extends('site.panel.heroes.master')

@section('panel-content')
	<h2>Edit hero</h2>
	<form class="" action="/heroes/{{ $hero->idHero }}" method="POST" enctype="multipart/form-data">
            <h3>Name</h3>
            <input class="form-control" type="text" name="name" value="{{ $hero->name }}" placeholder="Name" maxlength="150">
	    {{ ($errors->has('name')) ? $errors->first('name') : '' }}
            
            <h3>Class</h3>
            <select class="form-control" name="idClass">
                <option>Class</option>                
                @foreach($classes as $class)
                    <option value="{{ $class->idClass }}" {{ $class->idClass === $hero->idClass ? "selected" : "" }}> {{ $class -> name }} </option>
                @endforeach
            </select>
            {{ ($errors->has('idClass')) ? $errors->first('idClass') : '' }}
            
            <h3>Speciality</h3>
            <select class="form-control" name="idSpeciality">                
                <option>Speciality</option>
                @foreach($specialities as $speciality)
                    <option value="{{ $speciality->idSpeciality }}" {{ $speciality->idSpeciality === $hero->idSpeciality ? "selected" : "" }}> {{ $speciality -> name }} </option>
                @endforeach                
            </select>
            {{ ($errors->has('idSpeciality')) ? $errors->first('idSpeciality') : '' }}
            
            
            <h3>Life Points</h3>
            <input class="form-control" type="text" name="lifePoints" value="{{ $hero->lifePoints }}" placeholder="Life Points" maxlength="5">
	    {{ ($errors->has('lifePoints')) ? $errors->first('lifePoints') : '' }}
            
            <h3>Defense Points</h3>
            <input class="form-control" type="text" name="defensePoints" value="{{ $hero->defensePoints }}" placeholder="Defense Points" maxlength="5">
	    {{ ($errors->has('defensePoints')) ? $errors->first('defensePoints') : '' }}
            
            <h3>Damage Points</h3>
            <input class="form-control" type="text" name="damagePoints" value="{{ $hero->damagePoints }}" placeholder="Damage Points" maxlength="5">
	    {{ ($errors->has('damagePoints')) ? $errors->first('damagePoints') : '' }}
            
            <h3>Attack Speed</h3>
            <input class="form-control" type="text" name="attackSpeed" value="{{ $hero->attackSpeed }}" placeholder="Attack Speed" maxlength="5">
	    {{ ($errors->has('attackSpeed')) ? $errors->first('attackSpeed') : '' }}
            
            <h3>Movement Speed</h3>
            <input class="form-control" type="text" name="movementSpeed" value="{{ $hero->movementSpeed }}" placeholder="Movement Speed" maxlength="5">
	    {{ ($errors->has('movementSpeed')) ? $errors->first('movementSpeed') : '' }}
            
            <h3>Description</h3>
            <textarea class="form-control" rows="4" placeholder="Description" name="description">{{ $hero->description }}</textarea>
            {{ ($errors->has('description')) ? $errors->first('description') : '' }}
            
            <h3>Photos</h3>
            <input class="form-control" type="file" name="photos[]" multiple>
            
	    
            <br>	    
	    <input type="hidden" name="_method" value="put">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <input class="btn btn-default" type="submit" name="add" value="Update">
	</form>
@endsection
