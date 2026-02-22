<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // ✅ Validation
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'services' => 'required|string',
            'phone'    => 'required|string|max:20',
            'message'  => 'nullable|string'
        ]);

//        ContactMessage::create($validated);
//        dd($validated);
        Mail::raw(
            "Name: {$validated['name']}\n" .
            "Email: {$validated['email']}\n" .
            "Service: {$validated['services']}\n" .
            "Phone: {$validated['phone']}\n" .
            "Message: {$validated['message']}",
            function ($message) use ($validated) {
                $message->to('info@brightkingpainting.com')
                    ->subject('New Contact Message');
            }
        );

        return back()->with('success', 'Message sent successfully ✅');
    }
}
