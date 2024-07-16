<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }
    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'num_social' => 'required|integer',
            'telefono' => 'required|integer',
            'domicilio' => 'required|string',
            'proyecto_id' => 'required|integer',
        ]);


        $cliente= new Cliente();
        $cliente->num_social= $request->num_social;
        $cliente->telefono= $request->telefono;
        $cliente->domicilio = $request->domicilio;
        $cliente->proyecto_id = $request->proyecto_id;


        $cliente->save();

        return redirect()->route('clientes.index');

    }

    public function show(cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, cliente $cliente)
    {
        $request->validate([
            'num_social' => 'required|integer',
            'telefono' => 'required|integer',
            'domicilio' => 'required|string',
            'proyecto_id' => 'required|integer',

        ]);


        $cliente->num_social = $request->num_social;
        $cliente->telefono = $request->telefono;
        $cliente->domicilio = $request->domicilio;
        $cliente->proyecto_id = $request->proyecto_id;


        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
