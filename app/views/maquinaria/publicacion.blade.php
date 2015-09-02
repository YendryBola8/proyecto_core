@extends('plantilla.layouts')

@section('content')

{{ Form::open(array('url' => 'maquinaria')) }} 
<div class="form-group">
    {{ Form::label('tipoPublicacion', 'Tipo de Publicacion');}}
   {{ Form::text('tipo',null, ['class'=>'form-control flat']); }}
</div>
<div class="form-group">
    {{ Form::label('tipoMaquinaria', 'Tipo de Maquinaria');}}
    {{ Form::select('tipoModulo',array(''=>'Seleccionar tipo', 'Maquinarias Viales'=>'Maquinarias Viales', 'Maquinarias Agricolas'=>'Maquinarias Agricolas', 'Herramientas'=>'Herramientas'),null, ['class'=>'form-control', 'type'=>'email', 'placeholder'=>'DD-MM-YYYY']); }}

</div>

<div class="form-group">
   {{ Form::label('Maquinaria', 'herramientas');}}
    {{ Form::select('maquinaria',array('Bacheadoras'=>'Bacheadoras', 'Barredoras'=>'Barredoras', 'Batas'=>'Batas', 'Cargadoras'=>'Cargadoras'),null, ['class'=>'form-control']); }}

</div>


<button type="submit" class="btn btn-default">Guardar y continuar</button>


{{Form::close()}}
	
@stop