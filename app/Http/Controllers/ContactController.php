<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nadawca' => 'required|string|max:255',
            'firma' => 'nullable|string|max:255',
            'telefon' => 'nullable|string|max:20',
            'email' => 'required|email',
            'temat' => 'required|string|max:255',
            'treść' => 'required|string',
            'zgoda' => 'accepted'
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact.index')->with('success', 'Wiadomość została wysłana.');
    }

    public function all()
    {
        $messages = ContactMessage::latest()->paginate(5);
        return view('admin.all_messages', compact('messages'));
    }

    public function show($id)
    {
        $message = ContactMessage::findOrFail($id);
        return view('admin.message', compact('message'));
    }
}
