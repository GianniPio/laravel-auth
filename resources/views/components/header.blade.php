<header>
    <h1>sono header</h1>

    <h2>
        @auth <!-- Lo vede solo chi è registrato -->
            {{Auth::user() -> name}} <br>
            <a class="btn btn-secondary" href="{{route('logout')}}">LOGOUT</a>
        @endauth 
    </h2>
</header>