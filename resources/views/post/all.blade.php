<section class="m-5 grid grid-cols-1 sm:grid-cols-2 gap-6">
    @foreach ($posts as $post)
    <div class="flex flex-col bg-white border border-gray-200 shadow-lg">
        <div class="flex-1 p-6">
            <div class="flex items-center space-x-8">
                <img src="{{ Storage::url($post->obraz) }}" alt="{{ $post->tytuł }}" class="w-24 h-24 object-cover" />
                <h4 class=" font-semibold text-2xl text-blue-700 hover:text-red-500 cursor-pointer">
                    <a href="{{ route('post.show', ['title' => $post->tytuł]) }}">{{ $post->tytuł }}</a>
                </h4>
            </div>
            <hr class="text-gray-200 my-3" />
            <p>{{ Str::limit($post->treść, 200) }}</p>
        </div>
        <div class="p-4">
            <a href="{{ route('post.show', ['title' => $post->tytuł]) }}" class="inline-block text-white bg-blue-400 p-2 hover:bg-blue-500">Czytaj Dalej</a>
        </div>
    </div>
    @endforeach
</section>
<div class="mt-2 mx-6 bg-white">
    {{ $posts->links('pagination.custom') }}
</div>