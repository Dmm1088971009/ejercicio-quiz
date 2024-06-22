<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accidente;

class AccidenteController extends Controller
{
    public function index()
    {
        $accidentes = Accidente::all();
        return view('accidentes.index', compact('accidentes'));
    }

    public function create()
    {
        return view('accidentes.create');
    }

    public function store(Request $request)
    {
        $accidente = Accidente::create($request->all());
        return redirect()->route('accidentes.index');
    }

    public function show(Accidente $accidente)
    {
        return view('accidentes.show', compact('accidente'));
    }

    public function edit(Accidente $accidente)
    {
        return view('accidentes.edit', compact('accidente'));
    }

    public function update(Request $request, Accidente $accidente)
    {
        $accidente->update($request->all());
        return redirect()->route('accidentes.index');
    }

    public function destroy(Accidente $accidente)
    {
        $accidente->delete();
        return redirect()->route('accidentes.index');
    }
}
