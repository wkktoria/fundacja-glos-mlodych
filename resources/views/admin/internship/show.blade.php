@extends('layouts.admin')

@section('title', 'Szczegóły praktyki')

@section('content')
<div class="max-w-xl mx-auto p-6 rounded-md shadow">
    <h2 class="text-xl font-bold mb-4">Szczegóły Praktyki</h2>
    <p><strong>Nazwa:</strong> {{ $internship->nazwa }}</p>
    <p><strong>Opis:</strong> {{ $internship->opis }}</p>
    <p><strong>Obowiązki:</strong></p>
    <p class="whitespace-pre-line">{{ $internship->obowiązki }}</p>
    <p><strong>Narzędzia:</strong></p>
    <p class="whitespace-pre-line">{{ $internship->narzędzia }}</p>
    <p><strong>Obraz:</strong></p>
    @if($internship->obraz)
    <img src="{{ Storage::url($internship->obraz) }}" alt="Image" class="my-4 border border-gray-300 rounded-sm shadow-sm" />
    @endif
    <a href="{{ route('admin.internships.edit', $internship->id) }}" class="my-4 p-2  bg-yellow-500 hover:bg-yellow-600 text-white inline-block shadow-md rounded-md">Edytuj praktykę</a>
    <form method="POST" action="{{ route('admin.internships.destroy', $internship->id) }}" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="font-medium bg-red-500 hover:bg-red-600 text-white p-2 rounded-sm inline-block m-2 cursor-pointer">Usuń praktykę</button>
    </form>
    <a href="{{ route('admin.internships.all') }}" class="my-4 p-2 bg-slate-500 hover:bg-slate-600 text-white inline-block shadow-md rounded-md">Powrót do listy praktyk</a>
</div>
@stop