<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
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
        $posts = Post::latest()->paginate(5);
        return view('admin.post.all', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tytuł' => 'required|string|max:100',
            'treść' => 'required|string',
            'obraz' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategoria_id' => 'required|exists:kategorie,id',
        ]);

        if ($request->hasFile('obraz')) {
            $image = $request->file('obraz');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images/posts', $imageName);
            $imagePath = '/images/posts/' . $imageName;
            $validated['obraz'] = $imagePath;
        }

        Post::create($validated);

        return redirect()->route('admin.posts.all')->with('success', 'Post został pomyślnie dodany.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.posts.all')->with('success', 'Post został usunięty');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tytuł' => 'required|string|max:100',
            'treść' => 'required|string',
            'obraz' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategoria_id' => 'required|exists:kategorie,id',
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('obraz')) {
            $image = $request->file('obraz');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('images/posts', $imageName);
            $imagePath = '/images/posts/' . $imageName;
            $validated['obraz'] = $imagePath;
        }

        $post->update($validated);

        return redirect()->route('admin.posts.all')->with('success', 'Post został pomyślnie zaktualizowany.');
    }

    public function showAdmin($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }
}
