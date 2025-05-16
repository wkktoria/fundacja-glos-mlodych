@extends('layouts.admin')

@section('title', 'Szczegóły Wiadomości')

@section('content')
<div class="max-w-xl mx-auto p-6 rounded-md shadow">
    <h2 class="text-xl font-bold mb-4">Szczegóły Wiadomości</h2>
    <p><strong>Nadawca:</strong> {{ $message->nadawca }}</p>
    <p><strong>Firma:</strong> {{ $message->firma ?? '-' }}</p>
    <p><strong>Numer telefonu:</strong> {{ $message->telefon ?? '-' }}</p>
    <p><strong>Adres email:</strong> {{ $message->email }}</p>
    <p><strong>Temat:</strong> {{ $message->temat }}</p>
    <p><strong>Treść:</strong> {{ $message->treść }}</p>
    <a href="{{ route('admin.messages.all') }}" class="my-4 p-2 bg-slate-500 hover:bg-slate-600 text-white inline-block shadow-md rounded-md">Powrót do listy wiadomości</a>
</div>
@stop