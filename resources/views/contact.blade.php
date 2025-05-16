@extends('layouts.with_breadcrumb')

@section('title', 'Kontakt')

@section('content')
<section class="w-3/4 mx-auto my-8 grid grid-cols-1 gap-8 md:grid-cols-2">
    <div class="contact-container">
        <div class="flex items-center">
            <h4>Kontakt</h4>
            <hr class="flex-1" />
        </div>
        <h3 class="font-bold text-xl my-8">Fundacja na Rzecz Promocji i Rozwoju</h3>
        <p>Józef Protasewicz - Prezes Zarządu Fundacji<br />
            62-090 Rokietnica<br />
            Ul. Rolna 17d<br />
            Tel: 794 250 440<br />
            Tel: 733 636 477<br />
            Numer GG: 35208545<br />
            KRS 0000359598</p>
        <h3 class="font-bold text-xl my-8">Adresy e-mail do Fundacji:</h3>
        <p>kontakt@fundacjaglosmlodych.org<br />
            rekrutacja@fundacjaglosmlodych.org</p>
        <h3 class="font-bold text-xl my-8">Konto bankowe:</h3>
        <p>Fundacja na Rzecz Promocji i Rozwoju "Głos Młodych"<br />
            konto - Bank Pekao S.A. Poznań ul. Masztalerska 8a<br />
            Nr Konta 92 1240 1763 1111 0010 7475 8053<br />
            NIP 778-147-28-25<br />
            Regon 301479604</p>
    </div>
    <div class="form-container">
        <div class="flex items-center">
            <h4>Formularz Kontaktowy</h4>
            <hr class="flex-1" />
        </div>
        @if(session('success'))
        <div class="my-4 text-green-600 text-center">{{ session('success') }}</div>
        @endif
        @if($errors->any())
        <div class="p-2 m-4 border border-red-500 bg-red-400 text-white font-semibold rounded-xl shadow-xl text-center">
            <p class="font-bold">Wystąpiły błędy:</p>
            <ul class="mx-4 list-disc">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('contact.store') }}" class="flex flex-col gap-4 my-4">
            @csrf
            <div class="my-2">
                <label>
                    <input name="nadawca" required placeholder="Imię i nazwisko *" class="w-full p-2 border border-gray-200 rounded-xs" />
                </label>
            </div>
            <div class="my-2">
                <label>
                    <input name="firma" placeholder="Nazwa firmy" class="w-full p-2 border border-gray-200 rounded-xs" />
                </label>
            </div>
            <div class="my-2">
                <label>
                    <input name="telefon" type="tel" placeholder="Telefon" class="w-full p-2 border border-gray-200 rounded-xs" />
                </label>
            </div>
            <div class="my-2">
                <label>
                    <input name="email" type="email" required placeholder="Adres email *" class="w-full p-2 border border-gray-200 rounded-xs" />
                </label>
            </div>
            <div class="my-2 border border-gray-200 rounded-xs">
                <label>
                    <input name="temat" required placeholder="Temat *" class="w-full p-2 border border-gray-200 rounded-xs" />
                </label>
            </div>
            <div class="my-2">
                <label>
                    <textarea name="treść" required placeholder="Treść wiadomości *" class="w-full p-2 border border-gray-200 rounded-xs"></textarea>
                </label>
            </div>
            <div class="my-2">
                <label>
                    <input name="zgoda" type="checkbox" /> Wyrażam zgode na przetwarzania moich danych osobowych w celu kontaktu ze mną. *
                </label>
            </div>
            <div>
                <p>* Pola oznaczone gwiazdką są wymagane</p>
            </div>
            <div class="my-2">
                <input type="submit" value="Wyślij formularz" class="w-[50%] p-2 cursor-pointer border-none rounded-full text-xs text-white font-semibold bg-blue-500 text-center uppercase hover:brightness-90" />
            </div>
        </form>
    </div>
</section>
<section class="w-[80%] m-auto p-8 text-center text-white bg-slate-700">
    <h3 class="mb-4 font-bold text-xl">Dołącz do nas!</h3>
    <p>Przyłączenie sie do Fundacji jest bardzo prose:</p>
    <ol class="m-4 list-decimal">
        <li>Wystarczy zgłosić taką chęć (napisać bądź zadzwonić).</li>
        <li>Następnie spotkamy się, żeby dowiedzieć się czegoś więcej o sobie nawzajem.</li>
        <li>W końcu: będziemy mogli zacząć działać!</li>
    </ol>
</section>
@stop