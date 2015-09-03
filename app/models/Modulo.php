<?php
Class Modulo extends Eloquent{

	protected $table = 'tipomodulo';
	protected $primaryKey = 'idTipoModulo';
	protected $fillable=['nombre'];
	protected $guarded=['idTipoModulo'];


    public function publicacion(){
        return $this->belongsTo('Publicacion', 'fk_idTipoPublicacion');
    }

}
?>