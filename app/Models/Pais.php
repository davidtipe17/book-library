<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    // Indicamos que tabla se llama paises
	protected $table = 'paises';
    public $timestamps = false;
    
}
