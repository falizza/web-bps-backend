<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        return Publikasi::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|string|max:255',
        'releaseDate' => 'required|date',
        'description' => 'nullable|string',
        'coverUrl' => 'nullable|url',
        ]);

        $publikasi = Publikasi::create($validated);
        return response()->json($publikasi, 201);
    }

    public function show($id)
    {
        $publikasi = Publikasi::find($id);

        if (!$publikasi) {
            return response()->json(['message' => 'yahhh publikasi enggak ada, silakan ditambah dulu'], 404);
        }

        return response()->json($publikasi);
    }

    public function update(Request $request, $id)
    {
        $publikasi = Publikasi::find($id);

        if (!$publikasi) {
            return response()->json(['message' => 'Publikasi nggak ditemukan'], 404);
        }

        // Validasi untuk menampilkan
        $request->validate([
            'title' => 'string|nullable',
            'releaseDate' => 'date|nullable',
            'description' => 'string|nullable',
            'coverUrl' => 'url|nullable',
        ]);

        $publikasi->update($request->all());

        return response()->json([
            'message' => 'Publikasi berhasil diupdate',
            'data' => $publikasi
        ]);
    }

    public function destroy($id)
    {
        $publikasi = Publikasi::find($id);

        if (!$publikasi) {
            return response()->json(['message' => 'Yahh, Publikasi tidak ditemukan'], 404);
        }

        $publikasi->delete();

        return response()->json(['message' => 'Asikk, Publikasi berhasil dihapus']);
    }
}
