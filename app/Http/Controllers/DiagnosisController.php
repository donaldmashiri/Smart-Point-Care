<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $diagonises = Diagnosis::where('user_id', Auth::user()->id)->get();
        return view('diagonises.index', compact('diagonises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $solution = Diagnosis::where('category', 'LIKE', '%' . $request->category . '%')
            ->orWhere('symptoms', 'LIKE', '%' . $request->symptoms . '%')
            ->value('solution');

        $dia = Diagnosis::create([
            'user_id' => Auth::user()->id,
            'category' => $request->category,
            'symptoms' => $request->symptoms,
            'solution' => $solution,
        ]);

        return back()->with('success', 'Diagnosis Done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis)
    {
        //
    }
}
