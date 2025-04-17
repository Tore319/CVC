<?php

namespace App\Http\Controllers;

use App\Models\Csv;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Auth::user();

        if(!$usuario || $usuario->rol !== 'admin') {
            return redirect()->route('inicio');
        }

        $csvs = Csv::orderBy('created_at', 'DESC')->paginate(1);
        return view('csv.index', compact('csvs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuario = Auth::user();

        if(!$usuario || $usuario->rol !== 'admin') {
            return redirect()->route('inicio');
        }

        return view('csv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $csv = new Csv();
        $usuario = Auth::user();

        if(!$usuario || $usuario->rol !== 'admin') {
            return redirect()->route('inicio');
        }

        $csv->DNI = $request->get('dni');
        $csv->nombre = $request->get('nombre');
        $csv->apellidos = $request->get('apellidos');
        $csv->correo = $request->get('correo');
        if ($request->hasFile('archivo')) {
            $csv->archivo = $request->file('archivo')->store('csv', 'public');
        }
        $csv->hash = 'kdsbhglkg';
        $csv->csv = 'dnbhgjkdwhsngjkbrwegkljsab';

        if ($csv->save()) {
            return redirect()->route('inicio');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Csv $cvc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Csv $cvc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Csv $cvc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Csv $cvc)
    {
        //
    }
}
