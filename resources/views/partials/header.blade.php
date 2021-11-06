<head>
    @extends('partials/bootstrap')
    <title>@yield('title')</title>
</head>
@section("sidebar")


    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="logo logo-width-1 logo-hm3">
                    <span>Depomall</span>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Quiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">My Library</a>
            </li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>

@show
