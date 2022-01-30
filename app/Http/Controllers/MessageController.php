<?php

namespace App\Http\Controllers;

use App\Mail\ReachMeMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $this->sendMessageToMe($message);

        return response()->json([], 200);
    }

    protected function sendMessageToMe(Message $message)
    {
        Mail::to('o.moharram91@gmail.com')->send(new ReachMeMessage($message));
    }
}
