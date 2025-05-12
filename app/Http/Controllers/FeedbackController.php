<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all();
        return view("feedback")->with("feedback", $feedback);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(([
            'nazwa' => 'required|string|max:25',
            'treść' => 'required|string|max:255',
            'gwiazdki' => 'required|integer|min:1|max:5'
        ]));

        Feedback::create($validated);

        return redirect()->route('feedback.index')->with('success', 'Dziękujemy za opinię!');
    }
}
