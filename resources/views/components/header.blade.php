<header>
    <h1>sono header</h1>

    <h2>
        @auth
            {{Auth::user() -> name}} <br>
            <a class="btn btn-secondary" href="{{route('logout')}}">LOGOUT</a>
            @else

        @endauth 
    </h2>
</header>