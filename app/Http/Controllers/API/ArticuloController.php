<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        return response()->json(Articulo::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'fecha_publicacion' => 'required|date',
            'autor' => 'required|string|max:255',
        ]);

        $articulo = Articulo::create($validated);

        return response()->json($articulo, 201)->header('Location', route('articulos.show', $articulo));
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        return response()->json($articulo);
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'contenido' => 'sometimes|required|string',
            'fecha_publicacion' => 'sometimes|required|date',
            'autor' => 'sometimes|required|string|max:255',
        ]);

        $articulo->update($validated);

        return response()->json($articulo);
    }

    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();

        return response()->json(['mensaje' => 'Artículo eliminado.']);
    }
}
