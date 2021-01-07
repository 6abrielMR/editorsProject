<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';

    public function editorial() {
        return $this->belongsTo('App\Models\Editorial');
    }

    public function autores() {
        return $this->belongsTo('App\Models\Autor');
    }
}
