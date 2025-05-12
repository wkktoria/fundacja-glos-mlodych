@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Cele i zasady działania')

@php
$pages = ['Cele i zasady działania']
@endphp

@section('content')
<section class="w-[80%] mx-auto p-5">
    <h2 class="font-bold text-xl">Celami Fundacji są:</h2>
    <ul class="list-disc m-8 text-lg">
        <li>Wspieranie projektów organizacji pozarządowych mających na celu upowszechnianie i ochronę wolności
            i praw człowieka oraz swobód obywatelskich, a także działań wspomagających rozwój demokracji.</li>
        <li>Wspieranie przedsięwzięć dotyczących edukacji prawnej i obywatelskiej.</li>
        <li>Wspieranie naukowców i zespołów badawczych, pracujących w tych obszarach nauki, które posiadają znaczenie
            dla rozwoju cywilizacyjnego, kulturowego i gospodarczego Polski.</li>
        <li>Wspieranie transferu polskich osiągnięć naukowych do praktyki gospodarczej.</li>
        <li>Popieranie i realizacja wszelkich inicjatyw kulturalnych, edukacyjnych i społecznych oraz ich upowszechnianie.</li>
        <li>Działania na rzecz rozwoju demokracji i społeczeństwa obywatelskiego.</li>
        <li>Zwiększenie aktywności obywateli i wzmocnienie roli organizacji pozarządowych.</li>
        <li>Podejmowanie wszelkiej działalności służącej aktywizacji młodzieży, a w szczególności społeczności akademickich.</li>
        <li>Propagowanie zasad państwa prawa i przejrzystości w życiu publicznym.</li>
        <li>Wyrównywanie szans grup społecznie słabszych lub upośledzonych.</li>
        <li>Obrona swobód obywatelskich, praw mniejszości, kobiet, dzieci, niepełnosprawnych, imigrantów i uchodźców.</li>
        <li>Upowszechnianie wiedzy i metod społecznej kontroli funkcjonowania administracji i obrony praw indywidualnych
            przed wszelkimi formami nadużyć ze strony władzy.</li>
        <li>Działalność wspomagająca rozwój wspólnot i społeczności lokalnych.</li>
        <li>Działalność wspomagająca rozwój gospodarczy, w tym rozwój przedsiębiorczości.</li>
        <li>Organizowanie, finansowanie i prowadzenie działań mających na celu promocję i wspieranie zatrudnienia
            oraz rozwoju lokalnego i regionalnego na rzecz osób niepełnosprawnych i osób należących do grup dyskryminowanych
            i wykluczonych społecznie.</li>
        <li>Rozwijanie współpracy i solidarności międzynarodowej.</li>
        <li>Upowszechnianie najnowszych technik nauczania.</li>
        <li>Promocja nowych zjawisk w kulturze.</li>
        <li>Promocja i popularyzacja kultury i sztuki współczesnej w Polsce i na świecie.</li>
        <li>Promocja młodych artystów i twórców różnych dziedzin kultury.</li>
        <li>Promocja i wspierania młodych kuratorów i krytyków sztuki.</li>
        <li>Stymulowanie społecznych inicjatyw proekologicznych oraz propagowanie idei ochrony środowiska.</li>
        <li>Inicjowanie i wspieranie programów rekultywacji i ochrony środowiska, przyrody oraz dziedzictwa kulturowego.</li>
        <li>Upowszechnianie w społeczeństwie świadomości na temat możliwości i konieczności ustawicznego pogłębiania swej wiedzy.</li>
        <li>Upowszechnianie świadomości o konieczności stałego rozwoju oraz podnoszenia swoich kwalifikacji.</li>
        <li>Działalność wspomagająca rozwój kultury i sztuki.</li>
        <li>Tworzenie warunków rozwoju twórczości młodego pokolenia.</li>
        <li>Integracja środowisk twórczych.</li>
        <li>Integracja sztuki i nauk humanistycznych.</li>
        <li>Budzenie wrażliwości na tematy społeczne i kulturalne.</li>
        <li>Upowszechnianie i prezentacja polskiej kultury za granicą.</li>
        <li>Pomoc edukacyjna dla dzieci niewidomych, słabowidzących i niepełnosprawnych.</li>
        <li>Pomoc materialna i rzeczowa osobom utalentowanym artystycznie znajdującym się w trudnych warunkach materialnych
            lub życiowych oraz stwarzanie im, w miarę możliwości, warunków rozwoju ich talentów.</li>
        <li>Działania na rzecz dostępu obywateli do pomocy prawnej i wymiaru sprawiedliwości.</li>
        <li>Świadczenie pomocy organizacyjnej osobom i jednostkom podejmującym i prowadzącym działalność zbieżną z celami Fundacji.</li>
    </ul>

    <h2 class="font-bold text-xl">Fundacja realizuje swoje cele poprzez:</h2>
    <ul class="list-disc m-8 text-lg">
        <li>Gromadzenie, zarządzanie i rozdzielanie środków finansowych, darów materialnych i niematerialnych pozyskiwanych przez Fundację.</li>
        <li>Powoływanie i organizację pracy jednostek służących realizacji celów statutowych Fundacji.</li>
        <li>Współpracę z organizacjami, instytucjami i osobami prowadzącymi działalność zgodną z celami Fundacji.</li>
        <li>Inicjowanie i organizowanie akcji mających na celu zebranie środków finansowych na rzecz Fundacji,
            takich jak wystawy, pokazy, odczyty, aukcje, koncerty i inne.</li>
        <li>Organizacji i finansowania stypendiów i nagród dla osób realizujących cele Fundacji.</li>
        <li>Współpracę z władzami samorządowymi, rządowymi i organizacjami pozarządowymi w zakresie wymienionym w celach działania Fundacji.</li>
        <li>Skupianie wokół celów Fundacji osób i instytucji wspierających działania Fundacji.</li>
        <li>Działalność edukacyjną, wydawniczą i badawczą.</li>
        <li>Prowadzenie działalności wydawniczej i informacyjnej zgodnej z celami statutowymi Fundacji.</li>
        <li>Prowadzenie poradnictwa obywatelskiego, w postaci niezależnych usług wspierających samodzielność obywateli.</li>
        <li>Rzecznictwo interesów grup marginalizowanych społecznie.</li>
        <li>Działalność na rzecz dzieci specjalnej troski i osób niepełnosprawnych, umożliwiająca im aktywny udział
            w życiu społecznym, bezpośredni kontakt z kulturą i sztuką oraz wszelkimi dostępnymi formami spędzania czasu wolnego.</li>
        <li>Organizację i prowadzenie zajęć terapeutycznych, arteterapii, warsztatów artystycznych.</li>
        <li>Organizację konferencji, seminariów, spotkań, warsztatów, konkursów i innych imprez.</li>
        <li>Działalność na rzecz bezpiecznego, atrakcyjnego i aktywnego organizowania czasu wolnego dla dzieci
            i młodzieży oraz rozwoju ich zainteresowań i uzdolnień.</li>
        <li>Organizowanie wystaw, wernisaży, przedstawień i projektów artystycznych i Polsce i na świecie.</li>
        <li>Edukację dzieci i młodzieży w zakresie sztuki współczesnej i innych obszarów kultury.</li>
        <li>Fundowanie stypendiów dla młodych artystów i kuratorów dla dzieci szczególnie uzdolnionych, dla osób
            z biednych rodzin o wybitnych osiągnięciach w nauce.</li>
        <li>Działania wydawnicze upowszechniające wytwory kultury.</li>
        <li>Prowadzenie portalu internetowego z informacjami o naszych projektach i realizacjach, edukacji w Polsce i na świecie.</li>
        <li>Prowadzenie serwisu internetowego umożliwiającego dzieciom niewidomym i słabowidzącym darmowy dostęp
            do lektur szkolnych i pomocy naukowych w wersji audio.</li>
        <li>Prowadzenie serwisu internetowego służącego prezentacji i promocji twórczości młodych twórców.</li>
        <li>Inicjowanie innych form działalności służących celom Fundacji.</li>
        <li>Współpraca z innymi podmiotami przy realizacji wybranych projektów.</li>
    </ul>

    <p class="my-4 text-lg font-light">Dla osiągnięcia swoich celów Fundacja może wspierać działalność innych osób prawnych lub osób fizycznych, prowadzących działalność zbieżną z jej celami.</p>
    <p class="my-4 text-lg font-light">W swojej działalności Fundacja jest niezależna od instytucji państwowych i politycznych; nie wyręcza państwa i samorządów w wykonywaniu ich podstawowych obowiązków.</p>
</section>
@stop