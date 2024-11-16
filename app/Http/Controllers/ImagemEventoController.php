<?php

namespace App\Http\Controllers;

use App\Models\ImagemEvento;
use Illuminate\Http\Request;

class ImagemEventoController extends Controller
{
    public function index()
    {
        $imagens = ImagemEvento::all();
        return response()->json($imagens);
    }

    public function store(Request $request)
    {
        $request->validate([
            'evento_id' => 'required|integer',
            'url' => 'required|string',
        ]);

        $imagem = ImagemEvento::create($request->all());
        return response()->json($imagem, 201);
    }

    public function show($id)
    {
        // Ensure the ID is an integer
        $id = (int) $id;

        $imagemEvento = ImagemEvento::find($id);

        if (!$imagemEvento) {
            return response()->json(['message' => 'Image not found'], 404);
        }

        return response()->json($imagemEvento);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'evento_id' => 'integer',
            'url' => 'string',
        ]);

        $imagem = ImagemEvento::findOrFail($id);
        $imagem->update($request->all());
        return response()->json($imagem);
    }

    public function destroy($id)
    {
        $imagem = ImagemEvento::findOrFail($id);
        $imagem->delete();
        return response()->json(null, 204);
    }
}