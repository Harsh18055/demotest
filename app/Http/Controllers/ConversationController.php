<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConversationNotificationMail;

class ConversationController extends Controller
{
    public function create(Customer $customer)
    {
        return view('conversations.create', compact('customer'));
    }

    public function store(Request $request, Customer $customer)
    {
        $request->validate([
            'time' => 'required|date',
            'communication_medium' => 'required|in:Call,Email,SMS',
            'message' => 'required|string',
        ]);

       
        $conversation = $customer->conversations()->create([
            'time' => $request->time,
            'communication_medium' => $request->communication_medium,
            'message' => $request->message,
        ]);

       
        return redirect()->route('customers.show', $customer)->with('success', 'Conversation added successfully.');
    }
}
