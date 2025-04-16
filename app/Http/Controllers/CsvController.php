<?php

namespace App\Http\Controllers;

use App\Models\Csv;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $csvs = Csv::get();
        return view('csv.index')->with(compact('csvs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('csv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
