@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Praktyki')

@php
$pages = ['Praktyki']
@endphp

@section('content')
<section class="text-center">
    <h2 class="text-3xl font-light text-gray-700">Praktyki uczelniane i pozauczelniane</h2>
    <div class="w-[95%] mx-auto text-white bg-teal-700 p-4 my-6">
        <p class="my-4">Praktyki uczelniane i nie tylko…</p>
        <p class="my-4">Ideą przedsięwzięcia jest umożliwienie wykorzystania posiadanej wiedzy w celu jej praktycznego wykorzystania.</p>
        <p class="my-4">Pomagamy zdobyć doświadczenie będące przepustką do przyszłej kariery i osiągnięcia zaplanowanych celów.</p>
    </div>
    <div class="w-[95%] mx-auto text-white bg-purple-800 p-4 my-6">
        <p class="my-4 font-medium">Realizując praktyki uczelniane uwzględniamy programy edukacyjne poszczególnych uczelni zawarte w regulaminach praktyk.</p>
        <p class="my-4 font-medium">Wystawiamy stosowne dokumenty.</p>
        <p class="my-4 font-medium">Najlepsi otrzymują referencje i rekomendacje wraz z dokładnym opisem swoich osiągnięć i umiejętności.</p>
    </div>
</section>
<section class="text-center">
    <h2 class="text-3xl font-bold">Oferty Praktyk</h2>
    @forelse ($availableInternships as $internship)
    <ul class="w-[95%] mx-auto my-4">
        <li class="w-full text-white bg-blue-400 hover:bg-blue-500 p-3 my-4"><a href="{{ '/praktyki-' . str_replace(' ', '-', strtolower($internship)) }}" class="block">{{ $internship }}</a></li>
    </ul>
    @empty
    <p class="text-gray-500 text-center my-4">Brak praktyk do wyświetlenia.</p>
    @endforelse
</section>
<section class="text-center">
    <img src="/images/internship_info.png" alt="Internship" class="mx-auto" />
</section>
@stop