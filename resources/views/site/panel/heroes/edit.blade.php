@extends('site.panel.heroes.master')

@section('panel-content')
	<h2>Edit hero</h2>
	<form class="" action="/heroes/{{ $hero->idHero }}" method="POST" enctype="multipart/form-data">
            <h3>Name</h3>
            <input class="form-control" type="text" name="name" value="{{ $hero->name }}" placeholder="Name" maxlength="150" required>
	    {{ ($errors->has('name')) ? $errors->first('name') : '' }}
            
            <h3>Class</h3>
            <select class="form-control" name="idClass" required>
                <option value="">Class</option>                
                @foreach($classes as $class)
                    <option value="{{ $class->idClass }}" {{ $class->idClass === $hero->idClass ? "selected" : "" }}> {{ $class -> name }} </option>
                @endforeach
            </select>
            {{ ($errors->has('idClass')) ? $errors->first('idClass') : '' }}
            
            <h3>Speciality</h3>
            <select class="form-control" name="idSpeciality" required>                
                <option value="">Speciality</option>
                @foreach($specialities as $speciality)
                    <option value="{{ $speciality->idSpeciality }}" {{ $speciality->idSpeciality === $hero->idSpeciality ? "selected" : "" }}> {{ $speciality -> name }} </option>
                @endforeach                
            </select>
            {{ ($errors->has('idSpeciality')) ? $errors->first('idSpeciality') : '' }}
            
            
            <h3>Life Points</h3>
            <input class="form-control" type="text" name="lifePoints" value="{{ $hero->lifePoints }}" placeholder="Life Points" maxlength="5" required>
	    {{ ($errors->has('lifePoints')) ? $errors->first('lifePoints') : '' }}
            
            <h3>Defense Points</h3>
            <input class="form-control" type="text" name="defensePoints" value="{{ $hero->defensePoints }}" placeholder="Defense Points" maxlength="5" required>
	    {{ ($errors->has('defensePoints')) ? $errors->first('defensePoints') : '' }}
            
            <h3>Damage Points</h3>
            <input class="form-control" type="text" name="damagePoints" value="{{ $hero->damagePoints }}" placeholder="Damage Points" maxlength="5" required>
	    {{ ($errors->has('damagePoints')) ? $errors->first('damagePoints') : '' }}
            
            <h3>Attack Speed</h3>
            <input class="form-control" type="text" name="attackSpeed" value="{{ $hero->attackSpeed }}" placeholder="Attack Speed" maxlength="5" required>
	    {{ ($errors->has('attackSpeed')) ? $errors->first('attackSpeed') : '' }}
            
            <h3>Movement Speed</h3>
            <input class="form-control" type="text" name="movementSpeed" value="{{ $hero->movementSpeed }}" placeholder="Movement Speed" maxlength="5" required>
	    {{ ($errors->has('movementSpeed')) ? $errors->first('movementSpeed') : '' }}
            
            <h3>Description</h3>
            <textarea class="form-control" rows="4" placeholder="Description" name="description">{{ $hero->description }}</textarea>
            {{ ($errors->has('description')) ? $errors->first('description') : '' }}
            
            <h3>Photos</h3>
            <input class="form-control" type="file" name="photos[]" multiple>
            
	    
            <br>	    
	    <input type="hidden" name="_method" value="put">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <input class="btn btn-danger" type="submit" name="add" value="Update">
	</form>        
        
        </br>
        <button onclick="location.href='/heroes'" type="button" class="btn btn-default">Return</button>
@endsection

@push('scripts')
    <script type="text/javascript">
        //Masks
        $( document ).ready(function() {
            $('input[name=lifePoints').mask('00000');
            $('input[name=defensePoints').mask('00000');
            $('input[name=damagePoints').mask('00000');
            $('input[name=attackSpeed').mask('#.##0,00');
            $('input[name=movementSpeed').mask('00000');                
        });
    </script>
@endpush

