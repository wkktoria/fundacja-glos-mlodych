@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Opinie')

@php
$pages = ['Opinie']
@endphp

@section('content')
<section class="mx-5">
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-2 rounded my-2">
        {{ session('success') }}
    </div>
    @endif
    @if($errors->any())
    <div class="bg-red-100 text-red-800 p-2 rounded my-2">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{route('feedback.store')}}" class="flex flex-col gap-4 my-4">
        @csrf
        <div class="my-2">
            <label>
                <input name="nazwa" placeholder="Nazwa" class="w-full p-2 border border-gray-200 rounded-xs" required maxlength="25" />
            </label>
        </div>
        <div class="my-2">
            <label>
                <input name="treść" placeholder="Napisz swoją opinię" class="w-full p-2 border border-gray-200 rounded-xs" required maxlength="255" />
            </label>
            <div class="my-4 text-gray-400 text-sm">Maksymalna ilość znaków - 255</div>
        </div>
        <div class="my-2 flex justify-center">
            <div class="rate">
                @for ($i = 5; $i >= 1; $i--)
                <input name="gwiazdki" type="radio" id="star{{ $i }}" value="{{ $i }}" />
                <label for="star{{ $i }}" title="text">{{ $i }} gwiazdek</label>
                @endfor
            </div>
        </div>
        <div class="my-2">
            <input type="submit" value="Opublikuj" class="w-[25%] p-2 cursor-pointer border-none rounded-full text-xs text-white font-semibold bg-blue-500 text-center uppercase hover:brightness-90" />
        </div>
    </form>
</section>
<hr class="w-[95%] mx-auto text-gray-300" />
<section class="mx-5">
    <h2 class="my-4 text-center text-2xl font-bold">
        Opinie &amp; Oceny
    </h2>
    <hr class="w-[95%] mx-auto text-gray-300" />
    @forelse ($feedback as $item)
    <div class="w-[95%] mx-auto my-4">
        <div class="lg:flex lg:items-center lg:justify-between p-4">
            <div>
                <h3 class="text-lg">{{ $item->nazwa }}</h3>
                <div class="mt-2 text-yellow-500 text-xl lg:hidden">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <=$item->gwiazdki)
                        ★
                        @else
                        ☆
                        @endif
                        @endfor
                </div>
                <p class="mt-2 text-gray-700 font-extralight">{{ $item->treść }}</p>
            </div>
            <div class="hidden lg:flex lg:flex-col lg:items-start lg:space-y-1 text-sm">
                <div class="text-yellow-500 text-xl">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <=$item->gwiazdki)
                        ★
                        @else
                        ☆
                        @endif
                        @endfor
                </div>
                <p class="text-gray-400 text-xl">{{ $item->created_at->format('d M Y') }}</p>
            </div>
        </div>
        <hr class="my-2 text-gray-200" />
    </div>
    @empty
    <p class="text-gray-500 text-center my-4">Brak opinii do wyświetlenia.</p>
    @endforelse
</section>
@stop