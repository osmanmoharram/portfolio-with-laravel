<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender' => ['required', 'string'],
            'email' => ['required', 'email'],
            'body' => ['required', 'string', 'min:3']
        ]);

        $message = Message::create($validated);

        return response()->json([], 200);
    }
}
