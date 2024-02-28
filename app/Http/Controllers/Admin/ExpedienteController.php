<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\expediente;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $expedientes = expediente::all();

        // Pass the expedientes to the index view
        return view('admin.index', compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        // Create a new Expediente instance and populate it with the request data
        $expediente = new expediente([
            'demandante' => $request->demandante,
            'demandado' => $request->demandado,
            'año' => $request->año,
            'detalles' => $request->detalles
        ]);

        // Save the expediete to the database
        $expediente->save();

        // Redirect to the index page with a success message
        return redirect()->route('admin.expedientes.index')->with('success', 'Expediente creado con éxito!');
    }

   
    public function show(string $expediente)
    {
        // Find the expediete by its ID
        $expediente = expediente::find($expediente);

        // Check if the expediete exists, otherwise return a 404 error
        if (!$expediente) {
            abort(404);
        }

        // Pass the expediete to the show view
        return view('admin.show', compact('expediente'));
    }

    
    public function edit(string $expediente)
    {
        // Find the expediete by its ID
        $expediente = Expediente::find($expediente);

        // Check if the expediete exists, otherwise return a 404 error
        if (!$expediente) {
            abort(404);
        }

        // Pass the expediete to the edit view
        return view('admin.edit', compact('expediente'));
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $expediente)
    {
        $expediente = Expediente::find($expediente);

        // Check if the expediete exists, otherwise return a 404 error
        if (!$expediente) {
            abort(404);
        }

        // Validate the request data
        $request->validate([
            'demandante' => 'required|string',
            'demandado' => 'required|string',
            'año' => 'required|integer',
            'detalles' => 'required|string'
        ]);

        // Update the expediete with the new data
        $expediente->update($request->all());

        // Save the changes to the database
        $expediente->save();

        // Redirect to the index page with a success message
        return redirect()->route('admin.expedientes.index')->with('success', 'Expediente actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $expediente)
    {
        //

        $expediente = Expediente::find($expediente);

        // Check if the expediete exists, otherwise return a 404 error
        if (!$expediente) {
            abort(404);
        }

        // Delete the expediete from the database
        $expediente->delete();

        // Redirect to the index page with a success message
        return redirect()->route('admin.expedientes.index')->with('success', 'Expediente eliminado con éxito!');
   
    }
}
