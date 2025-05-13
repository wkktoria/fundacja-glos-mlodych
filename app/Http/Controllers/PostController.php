<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function show($title)
    {
        $post = Post::where('tytuł', $title)->firstOrFail();
        $categoryId = $post->category->id;

        $previous =  Post::where('kategoria_id', $categoryId)->where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('kategoria_id', $categoryId)->where('id', '>', $post->id)->orderBy('id', 'asc')->first();

        $view = "post.show";

        if ($post->category->nazwa == 'projekt') {
            $view = "project.show";
        } else if ($post->category->nazwa == 'aktualność') {
            $view = "feed.show";
        } else if ($post->category->nazwa == 'sprawozdanie') {
            $view = "report.show";
        }

        return view($view, compact('post', 'previous', 'next'));
    }

    public function all()
    {
        $posts = Post::paginate(5);
        return view('admin.post.all', compact('posts'));
    }
}
