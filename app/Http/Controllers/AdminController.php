<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Internship;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt(($credentials))) {
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }

            Auth::logout();
            return redirect()->route('admin.login')->withErrors(['unauthorized' => 'Dostęp tylko dla adminów.']);
        }

        return back()->withErrors(['credentials' => 'Nieprawidłowe dane logowania']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $posts = Post::all();
        $internships = Internship::all();
        $messages = ContactMessage::all();
        return view('admin.dashboard', compact('posts', 'internships', 'messages'));
    }
}
