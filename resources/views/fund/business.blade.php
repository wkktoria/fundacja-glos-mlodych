@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Działalność gospodarcza')

@php
$pages = ['Działalność gospodarcza']
@endphp

@section('content')
<section class="w-[85%] mx-auto text-center">
    <h2 class="font-bold text-xl">Fundacja może prowadzić działalność gospodarczą w szczególności w zakresie:</h2>
    <ul class="list-decimal text-lg text-left m-4 p-4">
        <li>produkcja pozostałych wyrobów z papieru i tektury (PKD 17.29.Z);</li>
        <li>drukowanie gazet (PKD 18.11.Z);</li>
        <li>pozostałe drukowanie (PKD 18.12.Z);</li>
        <li>działalność usługowa związana z przygotowaniem do druku (PKD 18.13.Z);</li>
        <li>introligatorstwo i podobne usługi (PKD 18.14.Z);</li>
        <li>reprodukcja zapisanych nośników informacji (PKD 18.20.Z);</li>
        <li>produkcja konstrukcji metalowych i ich części (PKD 25.11.Z);</li>
        <li>obróbka mechaniczna elementów metalowych (PKD 25.62.Z);</li>
        <li>produkcja pozostałych maszyn specjalnego przeznaczenia (PKD 28.9.);</li>
        <li>wytwarzanie energii elektrycznej (PKD 35.11.Z);</li>
        <li>dystrybucja energii elektrycznej (PKD 35.13.Z);</li>
        <li>handel energią elektryczną (PKD 35.14.Z);</li>
        <li>odzysk surowców z materiałów segregowanych (PKD 38.32.Z);</li>
        <li>realizacja projektów budowlanych związanych ze wznoszeniem budynków (PKD 41.10.Z);</li>
        <li>rozbiórka i burzenie obiektów budowlanych (PKD 43.11.Z);</li>
        <li>roboty budowlane związane ze wznoszeniem budynków mieszkalnych i niemieszkalnych (PKD 41.20.Z);</li>
        <li>wykonywanie instalacji elektrycznych (PKD 43.21.Z);</li>
        <li>wykonywanie robót budowlanych wykończeniowych (PKD 43.3.);</li>
        <li>pozostałe specjalistyczne roboty budowlane, gdzie indziej niesklasyfikowane (PKD 43.99.Z);</li>
        <li>działalność agentów zajmujących się sprzedażą żywności, napojów i wyrobów tytoniowych (PKD 46.17.Z);</li>
        <li>działalność agentów specjalizujących się w sprzedaży pozostałych określonych towarów (PKD 46.18.Z);</li>
        <li>działalność agentów zajmujących się sprzedażą towarów różnego rodzaju (PKD 46.19.Z);</li>
        <li>sprzedaż hurtowa kwiatów i roślin (PKD 46.22.Z);</li>
        <li>sprzedaż hurtowa owoców i warzyw (PKD 46.31.Z);</li>
        <li>sprzedaż hurtowa napojów alkoholowych (PKD 46.34.A);</li>
        <li>sprzedaż hurtowa napojów bezalkoholowych (PKD 46.34.B);</li>
        <li>sprzedaż hurtowa komputerów, urządzeń preferencyjnych i oprogramowania (PKD 46.51.Z);</li>
        <li>sprzedaż hurtowa sprzętu elektronicznego i telekomunikacyjnego oraz części do niego (PKD 46.52.Z);</li>
        <li>sprzedaż detaliczna prowadzona w niewyspecjalizowanych sklepach z przewagą żywności, napojów
            i wyrobów tytoniowych (PKD 47.11.Z);</li>
        <li>pozostała sprzedaż detaliczna prowadzona w niewyspecjalizowanych sklepach (PKD 47.19.Z);</li>
        <li>sprzedaż detaliczna książek prowadzona w wyspecjalizowanych sklepach (PKD 47.61.Z);</li>
        <li>sprzedaż detaliczna gazet i artykułów piśmiennych prowadzona w wyspecjalizowanych sklepach (PKD 47.62.Z);</li>
        <li>sprzedaż detaliczna nagrań dźwiękowych i audiowizualnych prowadzona w wyspecjalizowanych sklepach (PKD 47.63.Z);</li>
        <li>sprzedaż detaliczna pozostałych wyrobów prowadzona w wyspecjalizowanych sklepach (PKD 47.7);</li>
        <li>sprzedaż detaliczna żywności, napojów i wyrobów tytoniowych prowadzona na straganach i targowiskach (PKD 47.81.Z);</li>
        <li>sprzedaż detaliczna wyrobów tekstylnych, odzieży i obuwia prowadzona na straganach i targowiskach (PKD 47.82.Z);</li>
        <li>sprzedaż detaliczna pozostałych wyrobów prowadzona na straganach i targowiskach (PKD 47.89.Z);</li>
        <li>sprzedaż detaliczna prowadzona przez domy sprzedaży wysyłkowej lub Internet (PKD 47.91.Z);</li>
        <li>restauracje i inne stałe placówki gastronomiczne (PKD 56.10.A);</li>
        <li>ruchome placówki gastronomiczne (PKD 56.10.B);</li>
        <li>przygotowywanie i dostarczanie żywności dla odbiorców zewnętrznych (katering) (PKD 56.21.Z);</li>
        <li>pozostała usługowa działalność gastronomiczna (PKD 56.29.Z);</li>
        <li>przygotowywanie i podawanie napojów (PKD 56.30.Z);</li>
        <li>wydawania książek (PKD 58.11.Z);</li>
        <li>wydawanie wykazów oraz list (np. adresowych, telefonicznych) (PKD 58.12.Z);</li>
        <li>wydawanie gazet (PKD 58.13.Z);</li>
        <li>wydawanie czasopism i pozostałych periodyków (PKD 58.14.Z);</li>
        <li>pozostała działalność wydawnicza (PKD 58.19.Z);</li>
        <li>działalność wydawnicza w zakresie gier komputerowych (PKD 58.21.Z);</li>
        <li>działalność wydawnicza w zakresie pozostałego oprogramowania (PKD 58.29.Z);</li>
        <li>działalność związana z produkcja filmów, nagrań wideo i programów telewizyjnych (PKD 59.11.Z);</li>
        <li>działalność postprodukcyjna związana z filmami, nagraniami wideo i programami telewizyjnymi (PKD 59.12.Z);</li>
        <li>działalność związana z dystrybucja filmów, nagrań wideo i programów telewizyjnych (PKD 59.13.);</li>
        <li>działalność związana z projekcja filmów (PKD 59.14.Z);</li>
        <li>działalność w zakresie nagrań dźwiękowych i muzycznych (PKD 59.20.Z);</li>
        <li>nadawanie programów radiofonicznych (PKD 60.10.Z);</li>
        <li>nadawanie programów telewizyjnych ogólnodostępnych i abonamentowych (PKD 60.20.Z);</li>
        <li>projektowanie i programowanie stron internetowych (PKD 62.01.Z);</li>
        <li>przetwarzanie danych; zarządzanie stronami internetowymi (hosting) i podobna działalność (PKD 63.11.Z);</li>
        <li>działalność portali internetowych (PKD 63.12.Z);</li>
        <li>działalność agencji informacyjnych (PKD 63.91.Z);</li>
        <li>pozostała działalność usługowa w zakresie informacji, gdzie indziej niesklasyfikowana (PKD 63.99.Z);</li>
        <li>działalność związana z zarządzaniem funduszami (PKD 66.30.Z);</li>
        <li>kupno i sprzedaż nieruchomości na własny rachunek (PKD 68.10.Z);</li>
        <li>wynajem i zarządzanie nieruchomościami własnymi lub dzierżawionymi (PKD 68.20.Z);</li>
        <li>pośrednictwo w obrocie nieruchomościami (PKD 68.31.Z);</li>
        <li>zarządzanie nieruchomościami wykonywane na zlecenie (PKD 68.32.Z);</li>
        <li>działalność prawnicza (PKD 69.10.Z);</li>
        <li>działalność rachunkowo-księgowa; doradztwo podatkowe (PKD 69.20.Z);</li>
        <li>działalność firm centralnych (head offices) i holdingów, z wyłączeniem holdingów finansowych (PKD 70.10.Z);</li>
        <li>stosunki międzyludzkie (public relations) i komunikacja (PKD 70.21.Z);</li>
        <li>pozostałe doradztwo w zakresie prowadzenia działalności gospodarczej i zarządzania (PKD 70.22.Z);</li>
        <li>działalność w zakresie inżynierii i związane z nią doradztwo techniczne (PKD 71.12.Z);</li>
        <li>działalność agencji reklamowych (PKD 73.11.Z);</li>
        <li>pośrednictwo w sprzedaży czasu i miejsca na cele reklamowe w radio i telewizji (PKD 73.12.A);</li>
        <li>pośrednictwo w sprzedaży miejsca na cele reklamowe w mediach drukowanych (PKD 73.12.B);</li>
        <li>pośrednictwo w sprzedaży miejsca na cele reklamowe w mediach elektronicznych (Internet) (PKD 73.12.C);</li>
        <li>pośrednictwo w sprzedaży czasu i miejsca na cele reklamowe w pozostałych mediach (PKD 73.12.D);</li>
        <li>badania rynku i opinii publicznej (PKD 73.20.Z);</li>
        <li>działalność fotograficzna (PKD 74.20.Z);</li>
        <li>pozostała działalność profesjonalna, naukowa i techniczna, gdzie indziej niesklasyfikowana(PKD 74.90.Z);</li>
        <li>działalność związana z wyszukiwaniem miejsc pracy i pozyskiwaniem pracowników (PKD 78.10.Z);</li>
        <li>działalność agencji pracy tymczasowej (PKD 78.20.Z);</li>
        <li>pozostała działalność związana z udostępnianiem pracowników (PKD 78.30.Z);</li>
        <li>działalność agentów turystycznych (PKD 79.11.A);</li>
        <li>działalność pośredników turystycznych (PKD 79.11.B);</li>
        <li>działalność organizatorów turystyki (PKD 79.12.Z);</li>
        <li>działalność pilotów wycieczek i przewodników turystycznych (PKD 79.90.A);</li>
        <li>działalność w zakresie informacji turystycznej (PKD 79.90.B);</li>
        <li>pozostała działalność usługowa w zakresie rezerwacji, gdzie indziej niesklasyfikowana (PKD 79.90.C);</li>
        <li>działalność związana z administracyjną obsługą biura, włączając działalność wspomagającą (PKD 82.1.Z);</li>
        <li>działalność związana z organizacją targów i wystaw (PKD 82.30.Z);</li>
        <li>pozaszkolne formy edukacji sportowej oraz zajęć sportowych i rekreacyjnych (PKD 85.51.Z);</li>
        <li>pozaszkolne formy edukacji artystycznej (PKD 85.52.Z);</li>
        <li>pozaszkolne formy edukacji z zakresu nauki jazdy i pilotażu (PKD 85.53.Z);</li>
        <li>nauka języków obcych (PKD 85.59.A);</li>
        <li>pozostałe pozaszkolne formy edukacji, gdzie indziej niesklasyfikowane (PKD 85.59.B);</li>
        <li>działalność wspomagająca edukacje (PKD 85.60.Z);</li>
        <li>pozostała pomoc społeczna z zakwaterowaniem (PKD 87.90.Z);</li>
        <li>pomoc społeczna bez zakwaterowania dla osób w podeszłym wieku i osób niepełnosprawnych (PKD 88.10.Z);</li>
        <li>opieka dzienna nad dziećmi (PKD 88.91.Z);</li>
        <li>pozostała pomoc społeczna bez zakwaterowania, gdzie indziej niesklasyfikowana (PKD 88.99.Z);</li>
        <li>działalność związana z wystawianiem przedstawień artystycznych (PKD 90.01.Z);</li>
        <li>działalność wspomagająca wystawianie przedstawień artystycznych (PKD 90.02.Z);</li>
        <li>artystyczna i literacka działalność twórcza (PKD 90.03.Z);</li>
        <li>działalność obiektów kulturalnych (PKD 90.04.Z);</li>
        <li>pozostała działalność rozrywkowa i rekreacyjna (PKD 93.29.Z);</li>
        <li>działalność organizacji komercyjnych i pracodawców (PKD 94.11.Z);</li>
        <li>działalność organizacji profesjonalnych (PKD 94.12.Z);</li>
        <li>działalność pozostałych organizacji członkowskich, gdzie indziej niesklasyfikowana (PKD 94.99.Z);</li>
    </ul>
    <hr class="text-gray-300" />
    <p class="my-6 text-3xl">Dochody osiągane z działalności przeznaczone będą na realizację celów statutowych Fundacji
        i rozwój jej działalności gospodarczej.</p>
    <p class="my-6 text-3xl">Działalność gospodarcza może być prowadzona przez wyodrębnione zakłady.</p>
    <p class="my-6 text-3xl">Dla osiągnięcia celów Fundacji, może ona prowadzić działalność gospodarczą samodzielnie
        bądź we współdziałaniu z innymi podmiotami w kraju i za granicą, zgodnie z obowiązującymi przepisami.</p>
    <p class="my-6 text-3xl">Fundacja prowadzi działalność bezpośrednio lub za pośrednictwem wyodrębnionych zakładów lub innych podmiotów.</p>
    <p class="my-6 text-3xl">Zarząd Fundacji powołuje dyrektora zakładu Fundacji, lub skład zarządu spółki powołanej przez Fundację.</p>
    <p class="my-6 text-3xl">Decyzje dotyczące zbycia majątku trwałego lub jego obciążenia oraz decyzje dotyczące przedsięwzięć
        inwestycyjnych w ramach prowadzonej działalności gospodarczej podejmuje Rada Fundacji.</p>
</section>
@stop