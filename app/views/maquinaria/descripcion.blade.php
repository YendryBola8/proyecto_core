@extends('plantilla.layouts')



@section('content')
{{ Form::open([ 'method'=> 'POST', 'action'=> ['MaquinariaController@descripcionStore']]) }}

<div class="form-group">
    {{ Form::label('titulo', 'Titulo');}}
   {{ Form::text('titulo',null, ['class'=>'form-control flat']); }}
</div>
<div class="form-group">
    {{ Form::label('descripcion', 'Descripcion');}}
   {{ Form::text('descripcion',null, ['class'=>'form-control']); }}
</div>


<button type="submit" class="btn btn-default">Guardar y continuar</button>


{{Form::close()}}
	
@stop