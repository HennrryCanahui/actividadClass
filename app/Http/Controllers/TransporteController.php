<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transporte;

class TransporteController extends Controller
{
    public function index()
    {
        $transportes = Transporte::paginate(10);
        return view('transporte.index', compact('transportes'));
    }

    public function create()
    {
        return view('transporte.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:50',
            'nombre' => 'required|string|max:100',
            'razon_social' => 'required|string|max:150',
        ]);

        Transporte::create($request->all());

        return redirect()->route('transporte.index')
                         ->with('success', 'Transporte creado correctamente.');
    }

    public function show(Transporte $transporte)
    {
        return view('transporte.show', compact('transporte'));
    }

    public function edit(Transporte $transporte)
    {
        return view('transporte.edit', compact('transporte'));
    }

    public function update(Request $request, Transporte $transporte)
    {
        $request->validate([
            'codigo' => 'required|string|max:50',
            'nombre' => 'required|string|max:100',
            'razon_social' => 'required|string|max:150',
        ]);

        $transporte->update($request->all());

        return redirect()->route('transporte.index')
                         ->with('success', 'Transporte actualizado correctamente.');
    }

    public function destroy(Transporte $transporte)
    {
        $transporte->delete();

        return redirect()->route('transporte.index')
                         ->with('success', 'Transporte eliminado correctamente.');
    }
}
