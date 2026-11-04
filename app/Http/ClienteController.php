<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes=Cliente::where('estado','inactivo')->get(['nombre', 'email']);
        return view('Cliente.index', compact('Clientes'));
    }

    

    public function destroy(int $id)
    {
        $clientes = Cliente::findOrFail($id);
        $clientes->delete();
        return redirect()
            ->route('Cliente.destroy')
            ->with('success', 'Cliente eliminado correctamente.');
    }

    public function update(Request $request, Cliente $Cliente)
    {
        $validated = $request->validated([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'estado' => 'required|string|max:20',
            

        ],[
            'nombre.required' => 'El nombre es obligatoriamente.',
            'apellido.required' => 'El apellido es obligatoriamente.',
            'email.required' => 'El email es obligatoriamente.',
            'telefono.required' => 'El telefono es obligatoriamente.',
            'estado.required' => 'El estado es obligatoriamente.',
            'direccion.required' => 'La direccion es obligatoriamente.',
        ]);

        $Cliente->update($validated);

    }
}