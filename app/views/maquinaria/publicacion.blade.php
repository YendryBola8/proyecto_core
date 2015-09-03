@extends('plantilla.layouts')

@section('content')
{{ HTML::ul($errors->all()) }}
{{ Form::open([ 'method'=> 'POST', 'action'=> ['MaquinariaController@publicacionStore']]) }}

<div class="form-group">
    {{ Form::label('tipo', 'Tipo de Publicacion');}}
   {{ Form::text('tipo',null, ['class'=>'form-control flat']); }}
</div>
<div class="form-group">
    {{ Form::label('tipoModulo', 'Tipo de Maquinaria');}}
    {{ Form::select('nombre',array(''=>'Seleccionar tipo', 'Maquinarias Viales'=>'Maquinarias Viales', 'Maquinarias Agricolas'=>'Maquinarias Agricolas', 'Herramientas'=>'Herramientas'),null, ['class'=>'form-control', 'type'=>'email', 'placeholder'=>'DD-MM-YYYY']); }}

</div>

<div class="form-group">
   {{ Form::label('herramienta', 'Herramienta');}}
    {{ Form::select('herramienta',array('Bacheadoras'=>'Bacheadoras', 'Barredoras'=>'Barredoras', 'Batas'=>'Batas', 'Cargadoras'=>'Cargadoras'),null, ['class'=>'form-control']); }}

</div>


<button type="submit" class="btn btn-default">Guardar y continuar</button>


{{Form::close()}}
	
@stop