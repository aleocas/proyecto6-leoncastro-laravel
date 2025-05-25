<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulo;
use App\Models\Comentario;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $a1 = Articulo::create([
            'titulo' => 'Primer artículo',
            'contenido' => 'Contenido del primer artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Autor 1'
        ]);

        Comentario::create([
            'contenido' => 'Primer comentario del primer artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista A',
            'articulo_id' => $a1->id
        ]);

        Comentario::create([
            'contenido' => 'Segundo comentario del primer artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista B',
            'articulo_id' => $a1->id
        ]);

        $a2 = Articulo::create([
            'titulo' => 'Segundo artículo',
            'contenido' => 'Contenido del segundo artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Autor 2'
        ]);

        Comentario::create([
            'contenido' => 'Primer comentario del segundo artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista C',
            'articulo_id' => $a2->id
        ]);

        Comentario::create([
            'contenido' => 'Segundo comentario del segundo artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista D',
            'articulo_id' => $a2->id
        ]);

        $a3 = Articulo::create([
            'titulo' => 'Tercer artículo',
            'contenido' => 'Contenido del tercer artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Autor 3'
        ]);

        Comentario::create([
            'contenido' => 'Primer comentario del tercer artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista E',
            'articulo_id' => $a3->id
        ]);

        Comentario::create([
            'contenido' => 'Segundo comentario del tercer artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista F',
            'articulo_id' => $a3->id
        ]);

        $a4 = Articulo::create([
            'titulo' => 'Cuarto artículo',
            'contenido' => 'Contenido del cuarto artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Autor 4'
        ]);

        Comentario::create([
            'contenido' => 'Primer comentario del cuarto artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista G',
            'articulo_id' => $a4->id
        ]);

        Comentario::create([
            'contenido' => 'Segundo comentario del cuarto artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista H',
            'articulo_id' => $a4->id
        ]);

        $a5 = Articulo::create([
            'titulo' => 'Quinto artículo',
            'contenido' => 'Contenido del quinto artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Autor 5'
        ]);

        Comentario::create([
            'contenido' => 'Primer comentario del quinto artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista I',
            'articulo_id' => $a5->id
        ]);

        Comentario::create([
            'contenido' => 'Segundo comentario del quinto artículo.',
            'fecha_publicacion' => "2025-05-11T10:00:00",
            'autor' => 'Comentarista J',
            'articulo_id' => $a5->id
        ]);
    }
}