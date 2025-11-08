<x-layout>
    <x-header>
        <span class="pill-badge">
            <i class="bi bi-search"></i>
            {{ __('ui.hero.articles_search.badge') }}
        </span>
        <h1 class="hero-title mt-3">{{ __('ui.hero.articles_search.title', ['query' => $query]) }}</h1>
        <p class="hero-subtitle">{{ __('ui.hero.articles_search.subtitle') }}</p>
    </x-header>

    <div class="container mt-4">
        <x-errors />
    </div>

    <div class="container py-5">
        @if ($articles->isEmpty())
            <div class="glass-panel text-center">
                <h5 class="mb-2">{{ __('ui.lists.search_empty_title') }}</h5>
                <p class="text-muted mb-0">{{ __('ui.lists.search_empty_subtitle') }}</p>
            </div>
        @else
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                @foreach ($articles as $article)
                    <div class="col d-flex">
                        <x-card :article="$article" />
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $articles->links() }}
            </div>
        @endif
    </div>
</x-layout>