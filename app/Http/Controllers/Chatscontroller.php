<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSent;
use App\Models\User;

class Chatscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chats');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'user_id'=> 8,
            'message' => $request->message
        ]);

        broadcast(new MessageSent($message->load('user')))->toOthers();

        return ['status' => 'success'];
    }
}
