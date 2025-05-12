<p>Witaj, {{ auth()->user()->name }}</p>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Wyloguj</button>
</form>