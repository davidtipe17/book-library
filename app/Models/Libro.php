<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function autor(){
    	return $this->belongsTo(Autor::class);
	}

	public function editorial(){
    	return $this->belongsTo(Editorial::class);
	}

}
