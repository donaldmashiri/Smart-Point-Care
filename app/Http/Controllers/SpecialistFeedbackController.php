<?php

namespace App\Http\Controllers;

use App\Models\SpecialistFeedback;
use App\Models\User;
use App\Models\VitalParameter;
use Illuminate\Http\Request;
use Auth;

class SpecialistFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('feedbacks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $patient = User::where('role', 'patient')->findOrFail($request->user);
        return view('feedbacks.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'diagnosis' => 'required',
            'advice' => 'required',
        ]);

        $feedbacks = SpecialistFeedback::create([
            'user_id' => $request->user_id,
            'specialist_name' => Auth::user()->name,
            'advice' => $request->advice,
            'diagnosis' => $request->diagnosis,
        ]);

        return back()->with('success', 'Diagnosis added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SpecialistFeedback $specialistFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpecialistFeedback $specialistFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SpecialistFeedback $specialistFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpecialistFeedback $specialistFeedback)
    {
        //
    }
}
