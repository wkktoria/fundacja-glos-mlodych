@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'O Fundacji')

@php
$pages = ['O Fundacji']
@endphp

@section('content')
<section class="w-[95%] mx-auto px-5">
    <p class="text-xl font-light">Statut “Fundacji na rzecz promocji i rozwoju – Głos Młodych” ustanowiony został aktem notarialnym w dniu
        16 września 2009 roku. Fundacja jest organizacją pozarządową o charakterze non-profit, zajmującą się promowaniem i wspieraniem
        osób uzdolnionych. <span class="text-green-700 font-bold">Fundacja jednocześnie angażuje się we wszelkiego rodzaju inicjatywy
            kulturalne, edukacyjne oraz społeczne – pomagając w ich realizacji.</span> Stawia sobie za cel wspomaganie materialne
        i merytoryczne osób utalentowanych, tak, aby stworzyć im odpowiednie warunki do rozwoju. Ma ona również na celu promowanie Polski
        i jej dziedzictwa kulturowego na arenie międzynarodowej. Uczestnicy programów w oparciu o ustalone wcześniej kryteria, działają
        w zespołach, kreując tym samym własne projekty, jednocześnie stając się ich menedżerami; dlatego aby pomóc im w realizacji
        własnych pomysłów, będziemy również starali się udzielać im potrzebnego wsparcia finansowego.
    </p>
    <p class="my-6 text-xl font-bold">Wśród celów statutowych Fundacji znajdują się również:</p>
    <ul class="list-disc px-8 text-lg">
        <li>Działalność wspomagająca rozwój gospodarczy, w tym rozwój przedsiębiorczości</li>
        <li>Popieranie i realizacja wszelkich inicjatyw kulturalnych, edukacyjnych i społecznych</li>
        <li>Aktywizacja młodzieży, a zwłaszcza społeczności akademickich</li>
        <li>Zachęcanie do rozwoju, pogłębiania swojej wiedzy i podnoszenia swoich kwalifikacji</li>
        <li>Promowanie młodych artystów, wspieranie kuratorów i krytyków sztuki</li>
        <li>Popularyzacja polskiej kultury i sztuki za granicą</li>
        <li>Integrowanie środowisk twórczych</li>
        <li>Wspieranie projektów proekologicznych oraz propagowanie idei ochrony środowiska</li>
        <li>Upowszechnianie ochrony wolności i praw człowieka</li>
        <li>Działania na rzecz rozwoju demokracji i społeczeństwa obywatelskiego</li>
        <li>Wyrównywanie szans grup społecznie słabszych lub upośledzonych, w tym mniejszości narodowych, imigrantów, uchodźców, osób niepełnosprawnych</li>
    </ul>
    <p class="my-8 mx-2">Swoje cele Fundacja realizuje poprzez programy, konferencje, szkolenia oraz konkretne projekty
        (patrz zakładka „<a href="#" class="font-bold text-red-500 underline">Projekty</a>„).</p>
</section>
@stop