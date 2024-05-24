<?php

namespace App\Http\Controllers;

use App\Models\VitalParameter;
use Illuminate\Http\Request;

class VitalParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vital_parameters.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vital_parameters.create');
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
    public function show(VitalParameter $vitalParameter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VitalParameter $vitalParameter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VitalParameter $vitalParameter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VitalParameter $vitalParameter)
    {
        //
    }
}
