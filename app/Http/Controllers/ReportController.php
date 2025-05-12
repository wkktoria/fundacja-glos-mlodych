<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ReportController extends Controller
{
    public function index()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('nazwa', 'sprawozdanie');
        })->latest()->paginate(6);
        return view("report.all", compact('posts'));
    }
}
