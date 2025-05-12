<ul class="mx-auto mb-8 p-2 w-[95%] bg-zinc-100 flex flex-wrap items-center">
    <li class="ml-8 inline"><a href="/" class="text-blue-600 hover:text-red-600">Strona Główna</a></li>
    @foreach ($pages as $page)
    <li class="inline before:content-['>'] before:px-2 before:font-bold">{{$page}}</li>
    @endforeach
</ul>