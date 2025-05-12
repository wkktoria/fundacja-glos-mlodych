@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Praktyki - ' . $internship->nazwa)

@php
$pages = ['Praktyki', $internship->nazwa]
@endphp

@section('content')
<section class="w-[90%] mx-auto">
    <h2 class="text-center text-2xl font-semibold text-blue-700">{{ $internship->nazwa }} - Praktyki</h2>
    @if($internship->opis)
    <p class="my-4 p-2 text-lg">{{ $internship->opis }}</p>
    @else
    <p class="my-4 p-2 text-lg font-bold">
        Zrób praktyki z zakresu {{ $internship->nazwa }} w Fundacji na Rzecz Promocji i Rozwoju „Głos Młodych”!<br /><br />
        Jeśli chcesz odbyć praktyki studenckie lub pragniesz podwyższyć kwalifikacje (praktyki pozauczelniane) zgłoś się do nas.
    </p>
    @endif
    <img src="{{ Storage::url($internship->obraz) }}" alt="{{ $internship->nazwa }}" class="mx-auto" />
    <p class="text-xl mt-8 mb-2"><span class="font-bold">Obowiązki</span> (dostosowane do umiejętności praktykanta):</p>
    <ul class="list-disc text-xl px-8 py-2">
        @foreach(explode("\n", $internship->obowiązki) as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
    <p class="text-xl font-bold mt-8 mb-2">Najważniejsze narzędzia wykorzystywane podczas praktyk:</p>
    <ul class="list-disc text-xl px-8 py-2">
        @foreach(explode("\n", $internship->narzędzia) as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
</section>
<section class="my-8 text-center ">
    <img src="/images/internship_info.png" alt="Internship" class="mx-auto" />
    <button class="my-8 p-4 border rounded-xl text-white bg-blue-400  shadow-lg hover:bg-cyan-700 cursor-pointer">
        <a href="{{ route('internship.index') }}">Powrót do oferty praktyk</a>
    </button>
</section>
@stop