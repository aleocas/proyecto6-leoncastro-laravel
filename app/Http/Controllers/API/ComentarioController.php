<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Articulo;

class ComentarioController extends Controller
{
    public function index()
    {
        return response()->json(Comentario::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contenido' => 'required|string',
            'fecha_publicacion' => 'required|date',
            'autor' => 'required|string|max:255',
            'articulo_id' => 'required|exists:articulos,id',
        ]);

        $comentario = Comentario::create($validated);

        return response()->json($comentario, 201)->header('Location', route('comentarios.show', $comentario));
    }

    public function show($id)
    {
        $comentario = Comentario::findOrFail($id);
        return response()->json($comentario);
    }

    public function update(Request $request, $id)
    {
        $comentario = Comentario::findOrFail($id);

        $validated = $request->validate([
            'contenido' => 'sometimes|required|string',
            'fecha_publicacion' => 'sometimes|required|date',
            'autor' => 'sometimes|required|string|max:255',
            'articulo_id' => 'sometimes|required|exists:articulos,id',
        ]);

        $comentario->update($validated);

        return response()->json($comentario);
    }

    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();

        return response()->json(['mensaje' => 'Comentario eliminado.']);
    }

    public function porArticulo($id)
    {
        $articulo = Articulo::findOrFail($id);
        return response()->json($articulo->comentarios);
    }
}
