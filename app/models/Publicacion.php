<?php
Class Publicacion extends Eloquent{

	protected $table = 'tipopublicacion';
	protected $primaryKey = 'idTipoPublicacion';
	protected $fillable=['tipo'];
	protected $guarded=['idTipoPublicacion'];

    public function modulos(){
        return $this->hasMany('Modulo');
    }

}
?>