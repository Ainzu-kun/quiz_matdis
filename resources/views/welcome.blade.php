@if (Auth::check())
    {{ Auth::user()->name }}
    <br>
    <a href="{{ route('auth.logout') }}">Logout</a>
@else
    Please login first
    <br>
    <a href="{{ route('auth.login') }}">Login</a>
@endif
