<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\ReferralCase;
use App\Models\SpecialistFeedback;
use App\Models\User;
use App\Models\VitalParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = User::where('role', 'patient')->get();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'role' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:male,female',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|string|min:8|confirmed',
        ]);

         User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Patient Added created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = User::where('role', 'patient')->findOrFail($id);
        $vitalParameters = VitalParameter::where('user_id', $patient->id)->get();
        $feedbacks = SpecialistFeedback::where('user_id', $patient->id)->get();
        $referrals = ReferralCase::where('user_id', $patient->id)->get();


         return view('patients.show', compact('patient', 'vitalParameters', 'feedbacks', 'referrals'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
