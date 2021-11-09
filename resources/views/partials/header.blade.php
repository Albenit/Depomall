<head>
@extends('partials/bootstrap')

@section("sidebar")

</head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <ul class="navbar-nav">
            <li class="nav-item">
              <b><a class="nav-link" href="#">Depomall</a></b>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ballina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">eee</a>
            </li>

        </ul>


    </nav>
    <main>
        @yield('content')
    </main>


