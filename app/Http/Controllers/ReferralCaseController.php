<?php

namespace App\Http\Controllers;

use App\Models\ReferralCase;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ReferralCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //referrals
        return view('referrals.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $patient = User::where('role', 'patient')->findOrFail($request->user);
        $specialists = User::where('role', '!=', 'patient')->get();
        return view('referrals.create', compact('patient', 'specialists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'reason' => 'required',
        ]);

        $feedbacks = ReferralCase::create([
            'user_id' => $request->user_id,
            'specialist' => $request->specialist,
            'reason' => $request->reason,
        ]);

        return back()->with('success', 'successfully referred to  '.$request->specialist);
    }

    /**
     * Display the specified resource.
     */
    public function show(ReferralCase $referralCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferralCase $referralCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReferralCase $referralCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReferralCase $referralCase)
    {
        //
    }
}
