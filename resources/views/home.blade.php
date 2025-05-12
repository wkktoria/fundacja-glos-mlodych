@extends('layouts.default')

@section('title', 'Fundacja Głos Młodych')

@section('content')
<!-- CAROUSEL -->
<section class="carousel-wrapper">
    <ul class="carousel">
        <li class="item">
            <div class="content">
                <div class="image-container">
                    <img src="/images/carousel_slide_01.png" />
                    <div class="overlay-text">
                        <h2>Wśród celów statutowych Fundacji znajdują się:</h2>
                        <ul>
                            <li>- Działania i inicjatywy wspierające rozwój innowacyjności.</li>
                            <li>- Popieranie i realizacja wszelkich inicjatyw kulturalnych, edukacyjnych i społecznych.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="content">
                <div class="image-container">
                    <img src="/images/carousel_slide_02.png" />
                    <div class="overlay-text">
                        <h2>Promocja</h2>
                        <ul>
                            <li>- Zachęcanie do rozwoju, pogłębiania swojej wiedzy i podnoszenia swoich kwalifikacji.</li>
                            <li>- Popularyzacja polskiej kultury i sztuki za granicą.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="content">
                <div class="image-container">
                    <img src="/images/carousel_slide_03.png" />
                    <div class="overlay-text">
                        <h2>Wsparcie</h2>
                        <ul>
                            <li>- Integrowanie środowisk twórczych.</li>
                            <li>- Wspieranie projektów proekologicznych oraz propagowanie idei ochrony środowiska.</li>
                            <li>- Wspieranie transferu polskich osiągnięć naukowych do praktyki gospodarczej.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="content">
                <div class="image-container">
                    <img src="/images/carousel_slide_04.png" />
                    <div class="overlay-text">
                        <h2>Rozwój</h2>
                        <ul>
                            <li>- Działalność wspomagająca rozwój gospodarczy, w tym rozwój przedsiębiorczości.</li>
                            <li>- Działania na rzecz realizacji projektów badawczo-rozwojowych.</li>
                            <li>- Działalność wspomagająca rozwój wspólnot i społeczności lokalnych.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="item">
            <div class="content">
                <div class="image-container">
                    <img src="/images/carousel_slide_05.png" />
                    <div class="overlay-text">
                        <h2>Pomoc</h2>
                        <ul>
                            <li>- Pomoc edukacyjna dla dzieci niewidomych, słabowidzących i niepełnosprawnych.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <button class="button carousel-previous" type="button">&larr;</button>
        <button class="button carousel-next" type="button">&rarr;</button>
    </ul>
    <div class="carousel-indicators">
    </div>
</section>
<!-- END OF CAROUSEL -->
<section class="w-[80%] mx-auto my-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
    @include('includes.color_border_box', array('color' => 'border-sky-400',
    'heading' => 'Praktyki uczelniane i nie tylko',
    'text' => 'Ideą przedsięwzięcia jest umożliwienie wykorzystania posiadanej wiedzy w celu jej praktycznego wykorzystania. Zdobycie doświadczenia będącego przepustka do przyszłej kariery i osiągnięcia zaplanowanych celów.'))
    @include('includes.color_border_box', array('color' => 'border-green-400',
    'heading' => 'Fundacja na rzecz promocji i rozwoju Głos Młodych',
    'text' => 'to organizacja pozarządowa o charakterze non-profit. Fundacja utrzymywana jest ze środków własnych Fundatora i drobnych darowizn ludzi dobrej woli.'))
    @include('includes.color_border_box', array('color' => 'border-fuchsia-400',
    'heading' => 'Realizując praktyki uczelniane uwzględniamy',
    'text' => 'programy edukacyjne poszczególnych uczelni zawarte w regulaminach praktyk. Wystawiamy stosowne dokumenty. Najlepsi otrzymują referencje i rekomendacje wraz z dokładnym opisem swoich osiągnięć i umiejętności.'))
</section>
<section class="w-[80%] mx-auto text-white text-center flex flex-col gap-8 p-16" style="background-image: url('/images/stats_background.png'); background-size: cover;">
    <h3 class="text-2xl">Nasze ostatnie dokonania <span class="font-bold">w liczbach!</span></h3>
    <div class="grid grid-cols-1 sm:grid-cols-3">
        <div class="text-2xl">
            <p>Zrealizowaliśmy</p>
            <p class="font-bold">4768</p>
            <p>praktyk</p>
        </div>
        <div class="text-2xl">
            <p>w tym</p>
            <p class="font-bold">4768</p>
            <p>praktyk uczelnianych</p>
        </div>
        <div class="text-2xl">
            <p>Współpracujemy z</p>
            <p class="font-bold">124</p>
            <p>osobami</p>
        </div>
    </div>
    <p>Z zakresu dziennikarstwa, redakcji, tłumaczeń, moderowania, programowania - różne technologie,
        reklamy, social mediów, administracji systemów serwerowych, fotografii, ogólnie rozumianej grafiki, HR-u, administracji.</p>
</section>
<section class="w-[80%] mx-auto my-8 flex flex-wrap gap-8 p-8">
    <div class="flex flex-col flex-1 gap-8 p-4">
        <h2 class="text-2xl text-center font-bold">Aktualności</h2>
        @foreach($feed as $item)
        <div class="flex justify-center items-start gap-4 my-8 flex-1 max-w-full">
            <div class="w-full max-h-[200px] object-cover">
                <img src="{{ Storage::url($item->obraz) }}" alt="Feed" />
            </div>
            <div class="flex flex-col justify-between h-full">
                <h3><a href="{{ route('post.show', ['title' => $item->tytuł]) }}" class="text-blue-800 hover:text-red-500 font-semibold">{{ $item->tytuł }}</a></h3>
                <p class="my-4">{{ Str::limit($item->treść, 200) }}</p>
                <a href="{{ route('post.show', ['title' => $item->tytuł]) }}" class="text-white bg-sky-400 py-1 px-2 ml-auto hover:brightness-90">Czytaj Dalej</a>
            </div>
        </div>
        @endforeach
        <a href="{{ route('feed.index') }}" class="text-blue-500 text-center font-bold">Zobacz Wszystkie</a>
    </div>
    <div class="flex flex-col flex-1 gap-8 p-4">
        <h2 class="text-2xl text-center font-bold">Projekty</h2>
        @foreach($projects as $project)
        <div class="flex justify-center items-start gap-4 my-8 flex-1 max-w-full">
            <div class="w-full max-h-[200px] object-cover">
                <img src="{{ Storage::url($project->obraz) }}" alt="Project" />
            </div>
            <div class="flex flex-col justify-between h-full">
                <h3><a href="{{ route('post.show', ['title' => $project->tytuł]) }}" class="text-blue-800 hover:text-red-500 font-semibold">{{ $project->tytuł }}</a></h3>
                <p class="my-4">{{ Str::limit($project->treść, 200) }}</p>
                <a href="{{ route('post.show', ['title' => $project->tytuł]) }}" class="text-white bg-sky-400 py-1 px-2 ml-auto hover:brightness-90">Czytaj Dalej</a>
            </div>
        </div>
        @endforeach
        <a href="{{ route('project.index') }}" class="text-blue-500 text-center font-bold">Zobacz Wszystkie</a>
    </div>
</section>
<section class="text-center flex flex-col gap-4">
    <h3 class="font-semibold text-xl">Pomóż nam promować talenty!</h3>
    <h2 class="font-semibold text-2xl">Skontaktuj się z nami!</h2>
    <p>Tel: <a href="tel:+48794250440" class="text-blue-500 underline">794 250 440</a>, <a href="tel:+48733636477" class="text-blue-500 underline">733 636 477</a></p>
    <p>email: <a href="mailto:kontakt@fundacjaglosmlodych.org" class="text-blue-500 underline">kontakt@fundacjaglosmlodych.org</a></p>
</section>
@stop