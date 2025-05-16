@extends('layouts.admin')

@section('title', 'Wiadomości')

@section('content')
<h2 class="text-4xl text-center">Lista Wiadomości</h2>
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
                <th scope="col" class="px-6 py-3">Temat</th>
                <th scope="col" class="px-6 py-3">Nadawca</th>
                <th scope="col" class="px-6 py-3">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $message->id }}
                </th>
                <td class="px-6 py-4">
                    {{ Str::limit($message->temat, 50) }}
                </td>
                <td class="px-6 py-4">
                    {{ $message->nadawca }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('admin.messages.show', $message->id) }}" class="font-medium bg-blue-500 text-white p-2 rounded-sm inline-block m-2 cursor-pointer">Zobacz</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2 mx-6 bg-white">
        {{ $messages->links('pagination.custom') }}
    </div>
</div>
@stop