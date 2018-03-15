@extends('site.panel.heroes.master')

@section('panel-content')
	<h2>Add new hero</h2>
	<form class="" action="/heroes" method="POST" enctype="multipart/form-data">
            <h3>Name</h3>
            <input class="form-control" type="text" name="name" value="" placeholder="Name" maxlength="150">
	    {{ ($errors->has('name')) ? $errors->first('name') : '' }}
            
            <h3>Class</h3>
            <select class="form-control" name="idClass">
                <option>Class</option>                
                @foreach($classes as $class)
                    <option value="{{ $class->idClass }}"> {{ $class -> name }} </option>
                @endforeach
            </select>
            {{ ($errors->has('idClass')) ? $errors->first('idClass') : '' }}
            
            <h3>Speciality</h3>
            <select class="form-control" name="idSpeciality">                
                <option>Speciality</option>
                @foreach($specialities as $speciality)
                    <option value="{{ $speciality->idSpeciality }}"> {{ $speciality -> name }} </option>
                @endforeach                
            </select>
            {{ ($errors->has('idSpeciality')) ? $errors->first('idSpeciality') : '' }}
            
            
            <h3>Life Points</h3>
            <input class="form-control" type="text" name="lifePoints" value="" placeholder="Life Points" maxlength="5">
	    {{ ($errors->has('lifePoints')) ? $errors->first('lifePoints') : '' }}
            
            <h3>Defense Points</h3>
            <input class="form-control" type="text" name="defensePoints" value="" placeholder="Defense Points" maxlength="5">
	    {{ ($errors->has('defensePoints')) ? $errors->first('defensePoints') : '' }}
            
            <h3>Damage Points</h3>
            <input class="form-control" type="text" name="damagePoints" value="" placeholder="Damage Points" maxlength="5">
	    {{ ($errors->has('damagePoints')) ? $errors->first('damagePoints') : '' }}
            
            <h3>Attack Speed</h3>
            <input class="form-control" type="text" name="attackSpeed" value="" placeholder="Attack Speed" maxlength="5">
	    {{ ($errors->has('attackSpeed')) ? $errors->first('attackSpeed') : '' }}
            
            <h3>Movement Speed</h3>
            <input class="form-control" type="text" name="movementSpeed" value="" placeholder="Movement Speed" maxlength="5">
	    {{ ($errors->has('movementSpeed')) ? $errors->first('movementSpeed') : '' }}
            
            <h3>Description</h3>
            <textarea class="form-control" rows="4" placeholder="Description" name="description"></textarea>
            {{ ($errors->has('description')) ? $errors->first('description') : '' }}
            
            <h3>Photos</h3>
            <input class="form-control" type="file" name="photos[]" multiple>
            
	    
            <br>	    
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <input class="btn btn-default" type="submit" name="add" value="Add">
	</form>
@endsection
