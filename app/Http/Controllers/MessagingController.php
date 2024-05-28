<?php

namespace App\Http\Controllers;

use App\Models\Messaging;
use Illuminate\Http\Request;
use Auth;

class MessagingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messagings = Messaging::all();
        return view('messaging.index', compact('messagings'));
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

        $request->validate([
            'message' => 'required|string',
        ]);

        $messaging = Messaging::create([
            'user_id' => Auth::user()->id,
            'role' => $request->input('role'),
            'message' => $request->input('message'),
        ]);

        switch ($request->input('role')) {
            case 'PHCPS':
                $successMessage = 'Message sent to PHCPS.';
                break;
            case 'Specialist':
                $successMessage = 'Message sent to Specialists.';
                break;
            case 'Referral Centers':
                $successMessage = 'Message sent to Referral Centers.';
                break;
            default:
                $successMessage = 'Message sent.';
                break;
        }

        return back()->with('success', $successMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show(Messaging $messaging)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Messaging $messaging)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Messaging $messaging)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Messaging $messaging)
    {
        //
    }
}
