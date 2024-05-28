<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VitalParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VitalParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vitalParameters = VitalParameter::all();
        return view('vital_parameters.index', compact('vitalParameters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $patient = User::where('role', 'patient')->findOrFail($request->user);
        return view('vital_parameters.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'blood_pressure' => 'required',
            'heart_rate' => 'required',
            'body_temperature' => 'required',
            'oxygen_level' => 'required',
            'weight' => 'required',
            'notes' => 'nullable',
        ]);

        $vitalParameter = VitalParameter::create([
            'user_id' => $request->user_id,
            'blood_pressure' => $request->blood_pressure,
            'heart_rate' => $request->heart_rate,
            'body_temperature' => $request->body_temperature,
            'oxygen_level' => $request->oxygen_level,
            'weight' => $request->weight,
            'notes' => $request->notes,
        ]);

        return back()->with('success', 'Vital Parameters added successfully.');

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
