<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario; 

class Articulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'contenido',
        'fecha_publicacion',
        'autor',
    ];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}