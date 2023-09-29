<?php

namespace App\Helpers;

class Util {
	public static function estado($char){
    	$texto = '';
    	if($char=='A'){
        	$texto = 'Activo';
    	}else if($char=='I'){
        	$texto = 'Inactivo';
    	}else if($char=='E'){
        	$texto = 'Eliminado';
    	}else if($char=='N'){
        	$texto = 'Anulado';
    	}
	return $texto;
	}

	public static function bagde($char){
    	$estilo = '';
    	if($char=='A'){
        	$estilo = 'success';
    	}else if($char=='I'){
        	$estilo = 'secondary';
    	}else if($char=='E'){
        	$estilo = 'danger';
    	}else if($char=='N'){
        	$estilo = 'dark';
    	}
    	return $estilo;
	}
}
