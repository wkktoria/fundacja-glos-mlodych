@extends('layouts.admin')

@section('title', 'Panel Administracyjny')

@section('content')
<section class="w-100 p-2 m-4 flex flex-col justify-center items-center gap-2 border-2 border-gray-500 bg-gray-700 text-white rounded-2xl shadow-xl">
    <h2 class="text-2xl">Posty</h2>
    <p class="text-xl">Ilość postów: <span class="font-semibold">{{ $posts->count() }}</span></p>
    <div class="w-full my-3 flex justify-around items-center">
        <a href="{{ route('admin.posts.create') }}" class="p-2 bg-gray-500 hover:bg-gray-400 hover:font-semibold rounded-sm">Dodaj post</a>
        <a href="{{ route('admin.posts.all') }}" class="p-2 bg-gray-500 hover:bg-gray-400 hover:font-semibold rounded-sm">Lista postów</a>
    </div>
</section>
<section class="w-100 p-2 m-4 flex flex-col justify-center items-center gap-2 border-2 border-sky-400 bg-sky-600 text-white rounded-2xl shadow-xl">
    <h2 class="text-2xl">Praktyki (oferta)</h2>
    <p class="text-xl">Ilość praktyk: <span class="font-semibold">{{ $internships->count() }}</span></p>
    <div class="w-full my-3 flex justify-around items-center">
        <a href="{{ route('admin.internships.create') }}" class="p-2 bg-sky-400 hover:bg-sky-300 hover:font-semibold rounded-sm">Dodaj praktykę</a>
        <a href="{{ route('admin.internships.all') }}" class="p-2 bg-sky-400 hover:bg-sky-300 hover:font-semibold rounded-sm">Lista praktyk</a>
    </div>
</section>
<section class="w-100 p-2 m-4 flex flex-col justify-center items-center gap-2 border-2 border-amber-400 bg-amber-600 text-white rounded-2xl shadow-xl">
    <h2 class="text-2xl">Wiadomości</h2>
    <p class="text-xl">Ilość wiadomości: <span class="font-semibold">{{ $messages->count() }}</span></p>
    <div class="w-full my-3 flex justify-around items-center">
        <a href="{{ route('admin.messages.all') }}" class="p-2 bg-amber-400 hover:bg-amber-300 hover:font-semibold rounded-sm">Lista wiadomości</a>
    </div>
</section>
@stop