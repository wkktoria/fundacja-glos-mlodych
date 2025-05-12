<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FeedController extends Controller
{
    public function index()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('nazwa', 'aktualność');
        })->latest()->paginate(6);
        return view("feed.all", compact('posts'));
    }
}
