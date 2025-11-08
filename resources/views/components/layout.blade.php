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
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('homepage') }}" style="color: white;">Presto.it</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto align-items-lg-center gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">{{ __('ui.navbar.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="white-space: nowrap;" href="{{ route('article.index') }}">{{ __('ui.navbar.articles') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">
                            {{ __('ui.navbar.categories') }}
                        </a>
                        <ul class="dropdown-menu shadow border-0 rounded-4 p-2">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{route('byCategory', ['category' => $category]) }}" class="dropdown-item rounded-3">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" style="white-space: nowrap; margin-right: 20px;" href="{{ route('article.create') }}">{{ __('ui.navbar.create') }}</a>
                        </li>
                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" style="white-space: nowrap;" href="{{ route('revisor.index') }}">
                                    {{ __('ui.navbar.dashboard') }}
                                    <span class="badge rounded-pill bg-danger ms-2">
                                        {{ \App\Models\Article::articlesToCheckCount() }}
                                    </span>
                                </a>
                            </li>
                        @endif
                    @endauth
                </ul>

                <form class="search-bar input-group my-3 my-lg-0" role="search" action="{{route('article.search')}}" method="GET">
                    <input type="search" class="form-control shadow-none" name="query" placeholder="{{ __('ui.navbar.search_placeholder') }}" aria-label="{{ __('ui.navbar.search') }}">
                    <button type="submit" class="btn btn-gradient">{{ __('ui.navbar.search') }}</button>
                </form>

                <ul class="navbar-nav ms-lg-4 align-items-lg-center gap-lg-3">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" style="white-space: nowrap;" href="#">{{ __('ui.navbar.greeting', ['name' => Auth::user()->name]) }}</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" id="logout" class="d-none">
                                @csrf
                            </form>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">{{ __('ui.navbar.logout') }}</a>
                        </li>
                        @if (!Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link" style="white-space: nowrap;" href="{{route('becomeRevisor')}}">{{ __('ui.navbar.become_revisor') }}</a>
                            </li>
                        @endif
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('ui.navbar.login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('ui.navbar.register') }}</a>
                        </li>
                    @endguest
                    <li class="nav-item d-flex align-items-center gap-2">
                        <x-_locale lang="it" />
                        <x-_locale lang="en" />
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="flex-grow-1 py-5">
        <div class="container">
            <x-message></x-message>
        </div>
        {{ $slot }}
    </main>
    <footer class="footer text-center py-4 mt-auto">
        <div class="container small">
            <p class="mb-1">{{ __('ui.footer.line1', ['year' => now()->year]) }}</p>
            <p class="mb-0">{{ __('ui.footer.line2') }}</p>
        </div>
    </footer>
    @livewireScripts
</body>
</html>