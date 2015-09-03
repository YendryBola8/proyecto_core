@extends('plantilla.layouts')

@section('content')

<h3>Disponibilidad</h3>
<h5>Selecciona las fechas en que tu habitacion esta disponible</h5>
{{ Form::open([ 'method'=> 'POST', 'action'=> ['MaquinariaController@calendarioStore']]) }}

<div class="row">
  <div class="col-xs-3">
   	{{ Form::label('fechaEntrega', 'Fecha de Entrega');}}
    {{ Form::text('fechaEntrega',null, ['class'=>'form-control flat']); }}
  </div>
  <div class="col-xs-3">
    {{ Form::label('fechaEntrega', 'Fecha de Entrega');}}
    {{ Form::text('fechaEntrega',null, ['class'=>'form-control flat']); }}
  </div>
  <div class="col-xs-3">
   <br>
    <button type="submit" class="btn btn-success">Agregar</button>

  </div>
</div>
<div class="row">
  <div class="col-xs-3">
   	{{ Form::label('fechaEntrega', 'Fecha de Entrega');}}
    {{ Form::text('fechaEntrega',null, ['class'=>'form-control flat']); }}
  </div>
  <div class="col-xs-3">
    {{ Form::label('fechaEntrega', 'Fecha de Entrega');}}
    {{ Form::text('fechaEntrega',null, ['class'=>'form-control flat']); }}
  </div>
  <div class="col-xs-3">
   <br>
    <button type="submit" class="btn btn-success">Precio </button>

  </div>
</div>
<div class="row">
  <div class="col-xs-3">
   	{{ Form::label('fechaEntrega', 'Fecha de Entrega');}}
    {{ Form::text('fechaEntrega',null, ['class'=>'form-control flat']); }}
  </div>
  <div class="col-xs-3">
    {{ Form::label('fechaEntrega', 'Fecha de Entrega');}}
    {{ Form::text('fechaEntrega',null, ['class'=>'form-control flat']); }}
  </div>
  <div class="col-xs-3">
   <br>
    <button type="submit" class="btn btn-success">Precio </button>

  </div>
</div>
<br>
<button type="submit" class="btn btn-default">Guardar y continuar</button>


{{Form::close()}}
	
@stop