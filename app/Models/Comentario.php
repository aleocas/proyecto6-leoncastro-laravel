<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido',
        'fecha_publicacion',
        'autor',
        'articulo_id',
    ];

    public function articulo()
    {
        return $this->belongsTo(Articulo::class);
    }
}
