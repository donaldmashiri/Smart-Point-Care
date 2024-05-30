<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'patient') {
            $specialists = User::where('role', 'specialist')->get();
            return view('chats.index', compact('specialists'));
        } else if ($user->role == 'specialist') {
            $specialists = User::where('role', 'patient')->get();
            return view('chats.index', compact('specialists'));
        }

        return redirect()->back()->with('error', 'Invalid user role.');
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
            'receiver_id' => ['required'],
            'message' => ['required'],
        ]);

        $chat = Chat::create([
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success', 'Message sent.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $specialist = User::findOrFail($id);
        $userId = Auth::id();

        $chats = Chat::where(function($query) use ($userId, $id) {
            $query->where('user_id', $userId)
                ->where('receiver_id', $id);
        })->orWhere(function($query) use ($userId, $id) {
            $query->where('user_id', $id)
                ->where('receiver_id', $userId);
        })->orderBy('created_at', 'asc')->get();

//        referals
        $specialists = User::where('role', '!=', 'patient')->get();

        return view('chats.show', compact('specialist', 'chats', 'specialists'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
