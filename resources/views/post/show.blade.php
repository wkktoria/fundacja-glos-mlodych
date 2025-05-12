<section class="mx-6">
    <h2 class="font-bold text-3xl">{{ $post->tytuł }}</h2>
    <hr class="mt-8 mb-2" />
    <a href="{{ route($indexRouteName) }}" class="font-light text-gray-400 hover:text-rose-400 hover:underline">{{ $category }}</a>
    <hr class="mt-2 mb-8" />
    <p class="text-justify">{{ $post->treść }}</p>
</section>
<div class="flex mx-6 my-6">
    @if ($previous)
    <a href="{{ route('post.show', ['title' => $previous->tytuł]) }}" class="w-1/2 font-semibold text-lg text-blue-500 bg-gray-300 p-2 text-left hover:bg-blue-500 hover:text-white">&lt; {{ $previous->tytuł }}</a>
    @endif
    @if ($next)
    <a href="{{ route('post.show', ['title' => $next->tytuł]) }}" class="w-1/2 font-semibold text-lg text-blue-500 bg-gray-300 p-2 text-right hover:bg-blue-500 hover:text-white">{{ $next->tytuł }} &gt;</a>
    @endif
</div>
<section class="mx-6 my-4">
    <h3>Udostępnij</h3>
    <a href="https://www.facebook.com/Fundacja.Glos.Mlodych" target="_blank" rel="noopener noreferrer">
        <img src="/images/facebook.png" alt="Facebook" class="my-4 bg-blue-600" />
    </a>
</section>