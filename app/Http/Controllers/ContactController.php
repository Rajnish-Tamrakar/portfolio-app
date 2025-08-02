<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000'
        ]);

        $contact = Contact::create($validated);

        // Optional: Send email notification
        // try {
        //     Mail::to(config('mail.from.address'))
        //         ->send(new ContactFormMail($contact));
        // } catch (\Exception $e) {
        //     // Log the error but don't fail the request
        //     logger()->error('Failed to send contact email: ' . $e->getMessage());
        // }

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for your message! I\'ll get back to you soon.');
    }
}
