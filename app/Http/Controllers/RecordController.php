<?php

namespace App\Http\Controllers;

use App\Models\ReferralCase;
use App\Models\SpecialistFeedback;
use App\Models\User;
use App\Models\VitalParameter;
use Illuminate\Http\Request;
use Auth;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = User::where('id', Auth::user()->id)->first();
        $vitalParameters = VitalParameter::where('user_id', $patient->id)->get();
        $feedbacks = SpecialistFeedback::where('user_id', $patient->id)->get();
         $referrals = ReferralCase::where('user_id', $patient->id)->get();

        return view('records.index', compact('patient', 'vitalParameters', 'feedbacks', 'referrals'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
