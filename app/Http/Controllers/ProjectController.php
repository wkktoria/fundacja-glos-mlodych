<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function index()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('nazwa', 'projekt');
        })->latest()->paginate(6);
        return view("project.all", compact('posts'));
    }
}
