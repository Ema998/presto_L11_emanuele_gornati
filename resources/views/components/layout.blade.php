<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title ?? 'presto'}}</title>
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                        <div class="input-group">
                            <input type="search" class="form-control" name="query" placeholder="Cerca articoli" aria-label="Search">
                            <button type="submit" class="btn btn-outline-secondary input-group-text" id=""searchButton">
                                Cerca
                            </button>
                        </div>
                    </form>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.create') }}">Crea articolo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ciao {{ Auth::user()->name }}</a>
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
            </ul>
        </div>
    </nav>
    
    {{ $slot }}


    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Presto.it. All rights reserved.</p>
        <p>Powered by Laravel</p>
    </footer>
    @livewireScripts
</body>
</html>