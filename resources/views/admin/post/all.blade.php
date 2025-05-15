@extends('layouts.admin')

@section('Lista Postów', 'Fundacja Głos Młodych')

@section('content')
<h2 class="text-4xl text-center">Lista Postów</h2>
<a href="{{ route('admin.posts.create') }}" class="my-3 px-2 py-1 border border-sky-600 bg-sky-500 text-white rounded-sm shadow-sm">Dodaj post</a>
@if(session('success'))
<div class="p-2 m-4 border border-green-500 bg-green-400 text-white font-semibold rounded-xl shadow-xl text-center">
    <p>{{ session('success') }}</p>
</div>
@endif
<div class="m-4 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Tytuł</th>
                <th scope="col" class="px-6 py-3">Kategoria</th>
                <th scope="col" class="px-6 py-3">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $post->id }}
                </th>
                <td class="px-6 py-4">
                    {{ Str::limit($post->tytuł, 50) }}
                </td>
                <td class="px-6 py-4 uppercase">
                    {{ $post->category->nazwa }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="font-medium bg-yellow-500 text-white p-2 rounded-sm inline-block m-2 cursor-pointer">Edytuj</a>
                    <form method="POST" action="{{ route('admin.posts.destroy', $post->id) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium bg-red-500 text-white p-2 rounded-sm inline-block m-2 cursor-pointer">Usuń</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2 mx-6 bg-white">
        {{ $posts->links('pagination.custom') }}
    </div>
</div>
@stop