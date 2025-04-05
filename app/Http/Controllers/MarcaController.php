<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::paginate(10);
        return view('marca.index', compact('marcas'));
    }

    public function create()
    {
        return view('marca.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);

        Marca::create($request->all());

        return redirect()->route('marca.index')->with('success', 'Marca creada correctamente.');
    }

    public function show(string $id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.show', compact('marca'));
    }

    public function edit(string $id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.edit', compact('marca'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);

        $marca = Marca::findOrFail($id);
        $marca->update($request->all());

        return redirect()->route('marca.index')->with('success', 'Marca actualizada correctamente.');
    }

    public function destroy(string $id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect()->route('marca.index')->with('success', 'Marca eliminada correctamente.');
    }
}
