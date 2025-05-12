@if($errors->any())
@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif

<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <input type="email" name="email" required />
    <input type="password" name="password" required />
    <button type="submit">Zaloguj</button>
</form>