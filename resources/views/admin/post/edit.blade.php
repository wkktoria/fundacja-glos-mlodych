@extends('layouts.admin')

@section('title', 'Edytuj Post')

@section('content')
<h2 class="my-4 text-4xl">Edytuj Post</h2>
@if($errors->any())
<div class="p-2 m-4 border border-red-500 bg-red-400 text-white font-semibold rounded-xl shadow-xl text-center">
    <p class="font-bold">Wystąpiły błędy:</p>
    <ul class="mx-4 list-disc">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data" class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow-md space-y-4">
    @csrf
    @method('PUT')
    <div class="my-2">
        <label for="tytuł" class="block text-sm font-medium text-gray-700 mb-1">Tytuł:</label>
        <input id="tytuł" name="tytuł" type="text" value="{{ old('tytuł', $post->tytuł) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600" />
    </div>
    <div class="my-2">
        <label for="treść" class="block text-sm font-medium text-gray-700 mb-1">Treść:</label>
        <textarea rows="4" id="treść" name="treść" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600">{{ old('treść', $post->treść) }}</textarea>
    </div>
    <div class="my-2">
        <label for="obraz" class="block text-sm font-medium text-gray-700 mb-1">Obraz:</label>
        <input id="obraz" name="obraz" type="file" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600" />
        <span class="text-gray-300">Maksymalna wielkość pliku: 2MB</span>
        @if($post->obraz)
        <img src="{{ Storage::url($post->obraz) }}" alt="Image" class="my-4 border border-gray-300 rounded-sm shadow-sm" />
        @endif
    </div>
    <div class="my-2">
        <label for="kategoria_id" class="block text-sm font-medium text-gray-700 mb-1">Kategoria:</label>
        <select id="kategoria_id" name="kategoria_id" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-600 uppercase">
            <option value="">Wybierz kategorię</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $post->category->id ? 'selected' : ''}}>
                {{ $category->nazwa }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="text-center">
        <button type="submit" class="my-2 bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition cursor-pointer">Zapisz</button>
        <a href="{{ route('admin.posts.all') }}" class="my-2 bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600 transition cursor-pointer inline-block">Powrót do listy postów</a>
    </div>
</form>
@stop