<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\Marca;

class CamionController extends Controller
{
    public function index()
    {
        $camiones = Camion::paginate(10);
        return view('camiones.index', compact('camiones'));
    }

    public function create()
    {
        $marcas = Marca::all();
        return view('camiones.create', compact('marcas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:20',
            'codigo_interno' => 'required|string|max:50',
            'color' => 'required|string|max:30',
            'modelo' => 'required|string|max:20',
            'capacidad_toneladas' => 'required|numeric',
            'id_marca' => 'required|exists:marcas,id',
        ]);

        Camion::create($request->all());

        return redirect()->route('camiones.index')->with('success', 'Camión creado correctamente.');
    }

    public function show(string $id)
    {
        $camion = Camion::findOrFail($id);
        return view('camiones.show', compact('camion'));
    }

    public function edit(string $id)
    {
        $camion = Camion::findOrFail($id);
        $marcas = Marca::all();
        return view('camiones.edit', compact('camion', 'marcas'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'placa' => 'required|string|max:20',
            'codigo_interno' => 'required|string|max:50',
            'color' => 'required|string|max:30',
            'modelo' => 'required|string|max:20',
            'capacidad_toneladas' => 'required|numeric',
            'id_marca' => 'required|exists:marcas,id',
        ]);

        $camion = Camion::findOrFail($id);
        $camion->update($request->all());

        return redirect()->route('camiones.index')->with('success', 'Camión actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        $camion = Camion::findOrFail($id);
        $camion->delete();

        return redirect()->route('camiones.index')->with('success', 'Camión eliminado correctamente.');
    }
}
