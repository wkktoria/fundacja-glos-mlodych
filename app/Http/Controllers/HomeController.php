<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $feed = Post::whereHas('category', function ($query) {
            $query->where('nazwa', 'aktualność');
        })->latest()->limit(3)->get();
        $projects = Post::whereHas('category', function ($query) {
            $query->where('nazwa', 'projekt');
        })->latest()->limit(3)->get();
        return view("home", compact('feed', 'projects'));
    }
}
