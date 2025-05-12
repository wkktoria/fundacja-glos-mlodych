<nav class="nav">
    <div class="hamburger">&#9776;</div>
    <ul class="nav-list">
        <li class="nav-list-item">
            <a href="/">Strona Główna</a>
        </li>
        <li class="nav-list-item">
            <a href="{{ route('fund.about') }}">O Fundacji &#8964;</a>
            <ul class="sub-list">
                <li class="sub-list-item">
                    <a href="{{ route('fund.charter') }}">Statut Fundacji</a>
                </li>
                <li class="sub-list-item">
                    <a href="{{ route('fund.executive') }}">Zarząd Fundacji</a>
                </li>
                <li class="sub-list-item">
                    <a href="{{ route('fund.objectives') }}">Cele i Zasady Działania</a>
                </li>
                <li class="sub-list-item">
                    <a href="{{ route('fund.business') }}">Działalność Gospodarcza</a>
                </li>
                <li class="sub-list-item">
                    <a href="{{ route('report.index') }}">Sprawozdania</a>
                </li>
            </ul>
        </li>
        <li class="nav-list-item">
            <a href="{{ route('internship.index') }}">Praktyki</a>
        </li>
        <li class="nav-list-item">
            <a href="{{ route('project.index') }}">Projekty</a>
        </li>
        <li class="nav-list-item">
            <a href="{{ route('feed.index') }}">Aktualności</a>
        </li>
        <li class="nav-list-item">
            <a href="{{ route('gallery.index') }}">Galeria</a>
        </li>
        <li class="nav-list-item">
            <a href="{{ route('contact.index') }}">Kontakt</a>
        </li>
        <li class="nav-list-item">
            <a href="{{ route('feedback.index') }}">Opinie</a>
        </li>
    </ul>
</nav>