<?php

class MaquinariaController extends \BaseController {

	
	/* CONSULTAS */
	public function publicacion()
	{
		//

		return View::make('maquinaria.publicacion'); 
	}

	public function calendario()
	{
		//
		
		return View::make('maquinaria.calendario'); 
	}

	public function fotos()
	{
		//

		return View::make('maquinaria.fotos'); 
	}

	public function descripcion()
	{
		//

		return View::make('maquinaria.descripcion'); 
	}

	/*GUARDADO DE DATOS*/	
	public function publicacionStore()
	{
		//

		//validacion

        $reglas = array(
            'tipo'       => 'required'
            
            
        );
        $validator = Validator::make(Input::all(), $reglas);
        if ($validator->fails()) {
            return Redirect::to('maquinaria/publicacion')
                ->withErrors($validator);
        } else {
	 		
	 		session_start();
	 		$_SESSION["maquinaria"];
	 		$_SESSION["maquinaria"] = Input::all();


            return Redirect::to('maquinaria/calendario');
          

			
		
           	}
		
	}

	public function calendarioStore()
	{
				
				
				return Redirect::to('maquinaria/fotos');
	}	


	public function fotosStore()
	{
				
				
				return Redirect::to('maquinaria/descripcion');
	}

	public function descripcionStore()
	{
				
			session_start();
			$_SESSION["descripcion"] = Input::all();
			
			//INSERTAR
	 		$publicacion= new Publicacion;
	 		$data= $_SESSION["maquinaria"];
	 		$publicacion->fill($data);
	 		$publicacion->save();
        	$LastInsertId = $publicacion->idTipoPublicacion;

        	//OBTENER ULTIMO ID DE PUBLICACION
        	$publicacion = Publicacion::find($LastInsertId);


        	$modulo= new Modulo;
        	$modulo->publicacion()->associate($publicacion);
           	//$modulo->nombre = Input::get('herramienta');
           	$modulo->fill($data);
           	$modulo->save();

        	
	}

	public function show($id)
	{
		//


	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
