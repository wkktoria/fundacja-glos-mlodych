@php
use App\Models\Internship;
use App\Models\Post;

if (!isset($availableInternships)) {
$availableInternships = Internship::pluck("nazwa");
}

$feed = Post::whereHas('category', function ($query) {
$query->where('nazwa', 'aktualność');
})->latest()->limit(3)->get();
@endphp

<div class="lg:block hidden w-[20%]">
    <div class="mb-6">
        <h4 class="p-2">O fundacji</h4>
        <hr />
        <ul class="mt-3">
            <li class="my-1"><a href="{{ route('fund.about') }}" class="text-blue-500 hover:text-red-500">O fundacji</a></li>
            <li class="my-1"><a href="{{ route('fund.executive') }}" class="text-blue-500 hover:text-red-500">Zarząd fundacji</a></li>
            <li class="my-1"><a href="{{ route('fund.charter') }}" class="text-blue-500 hover:text-red-500">Statut fundacji</a></li>
            <li class="my-1"><a href="{{ route('fund.objectives') }}" class="text-blue-500 hover:text-red-500">Cele i zasady działania</a></li>
            <li class="my-1"><a href="{{ route('fund.business') }}" class="text-blue-500 hover:text-red-500">Działalność gospodarcza</a></li>
            <li class="my-1"><a href="{{ route('report.index') }}" class="text-blue-500 hover:text-red-500">Sprawozdania</a></li>
        </ul>
    </div>
    <div class="mb-6">
        <h4 class="p-2">Polub nas na FB</h4>
        <hr />
        <a href="https://www.facebook.com/Fundacja.Glos.Mlodych" target="_blank" rel="noopener noreferrer">
            <img src="/images/facebook_banner.jpg" alt="Facebook" class="my-4" />
        </a>
    </div>
    <div class="mb-6">
        <h4 class="p-2">Aktualności</h4>
        <hr />
        <ul class="mt-3">
            @foreach ($feed as $item)
            <li class="my-1"><a href="{{ route('post.show', ['title' => $item->tytuł]) }}" class="text-blue-500 hover:text-red-500">{{ $item->tytuł }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="mb-6">
        <h4 class="p-2">Praktyki</h4>
        <hr />
        <ul class="mt-3">
            @foreach ($availableInternships as $internship)
            <li class="my-1"><a href="{{ '/praktyki-' . str_replace(' ', '-', strtolower($internship)) }}" class="text-blue-500 hover:text-red-500">{{ $internship }}</a></li>
            @endforeach
        </ul>
    </div>
</div>