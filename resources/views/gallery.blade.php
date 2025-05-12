@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Galeria')

@php
$pages = ['Galeria']
@endphp

@section('content')
<section class="mx-5 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
    @forelse ($images as $image)
    <div class="relative group overflow-hidden h-80">
        <img src="{{ Storage::url($image->path) }}" alt="{{ $image->text}}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" />
        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <p class="text-white text-lg font-semibold text-center">{{ $image->text }}</p>
        </div>
    </div>
    @empty
    <p class="text-gray-500 text-center my-4">Brak zdjęć do wyświetlenia.</p>
    @endforelse
</section>
@stop