<?php

namespace App\Http\Controllers;

use App\Models\ReferralCase;
use Illuminate\Http\Request;

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
