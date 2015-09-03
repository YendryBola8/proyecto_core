@extends('plantilla.layouts')



@section('content')
<h2>AREGA ALGUNA FOTO</h2>
<h4>Publica 4 o mas! De la maquinaria, las partes en comun, etc</h4>
{{ Form::open([ 'method'=> 'POST', 'action'=> ['MaquinariaController@fotosStore']]) }}
<div class="form-group">
   <button class="btn btn-success"> {{ Form::file('foto',null, ['class'=>'form-control flat', 'placeholder'=>'Agregar foto']); }}</button>
</div>
<div class="form-group">

    <button class="btn btn-success">  {{ Form::file('video',null, ['class'=>'form-control flat', 'placeholder'=>'Agregar video']); }}</button>
</div>


<button type="submit" class="btn btn-default">Guardar y continuar</button>


{{Form::close()}}
	
@stop