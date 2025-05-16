@extends('layouts.admin')

@section('title', 'Szczegóły Postu')

@section('content')
<div class="max-w-xl mx-auto p-6 rounded-md shadow">
    <h2 class="text-xl font-bold mb-4">Szczegóły Postu</h2>
    <p><strong>Tytuł:</strong> {{ $post->tytuł }}</p>
    <p><strong>Treść:</strong> {{ $post->treść }}</p>
    <p><strong>Kategoria:</strong> {{ $post->category->nazwa }}</p>
    <p><strong>Obraz:</strong></p>
    @if($post->obraz)
    <img src="{{ Storage::url($post->obraz) }}" alt="Image" class="my-4 border border-gray-300 rounded-sm shadow-sm" />
    @endif
    <a href="{{ route('admin.posts.edit', $post->id) }}" class="my-4 p-2  bg-yellow-500 hover:bg-yellow-600 text-white inline-block shadow-md rounded-md">Edytuj post</a>
    <form method="POST" action="{{ route('admin.posts.destroy', $post->id) }}" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="font-medium bg-red-500 hover:bg-red-600 text-white p-2 rounded-sm inline-block m-2 cursor-pointer">Usuń post</button>
    </form>
    <a href="{{ route('admin.posts.all') }}" class="my-4 p-2 bg-slate-500 hover:bg-slate-600 text-white inline-block shadow-md rounded-md">Powrót do listy postów</a>
</div>
@stop