<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    public function __construct()
    {
        // Melindungi semua metode kecuali 'index' dan 'show'
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $tokos = Toko::all();
        return view('tokos.index', compact('tokos'));
    }

    public function create()
    {
        return view('tokos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'lokasi' => 'required',
        ]);

        Toko::create($request->all());

        return redirect()->route('tokos.index')->with('success', 'Toko berhasil ditambahkan');
    }

    public function show(Toko $toko)
    {
        return view('tokos.show', compact('toko'));
    }

    public function edit(Toko $toko)
    {
        return view('tokos.edit', compact('toko'));
    }

    public function update(Request $request, Toko $toko)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'lokasi' => 'required',
        ]);

        $toko->update($request->all());

        return redirect()->route('tokos.index')->with('success', 'Toko berhasil diupdate');
    }

    public function destroy(Toko $toko)
    {
        $toko->delete();

        return redirect()->route('tokos.index')->with('success', 'Toko berhasil dihapus');
    }
}
