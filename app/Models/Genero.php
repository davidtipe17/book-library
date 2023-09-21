<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    // Indicamos que la tabla no usa los campos created_at y updated_at
	public $timestamps = false;

    use HasFactory;
}
