<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title ?? 'presto'}}</title>
    @livewireStyles
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">I Nostri Articoli</a>
                </li>
                <li class="nav-item">
                    <form class="d-flex ms-auto" role="search" action="{{route('article.search')}}" method="GET">
                        <div class="input-group w-100">
                            <input type="search" class="form-control ml-2" name="query" placeholder="Cerca articoli" aria-label="Search">
                            <button type="submit" class="btn btn-outline-secondary input-group-text mr-2" id="searchButton">
                                Cerca
                            </button>
                        </div>
                    </form>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.create') }}">Crea articolo</a>
                    </li>
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('revisor.index') }}">
                                Dashboard
                                <span class="badge badge-danger">
                                    {{ $articlesToCheck->count() }}
                                </span>
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                     <li class="nav-item">
                        <a class="nav-link" href="#">Ciao {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" id="logout" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('becomeRevisor')}}">Diventa revisore</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest
                <x_locale lang="it" />
                <x_locale lang="en" />
            </ul>
        </div>
    </nav>
    <main class="flex-grow-1 container-fluid py-5">
        {{ $slot }}
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p>&copy; 2025 Presto.it. All rights reserved.</p>
        <p>Powered by Laravel</p>
    </footer>
    @livewireScripts
</body>
</html>