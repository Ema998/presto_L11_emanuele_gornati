<x-layout>
    <x-header>
        <span class="pill-badge">
            <i class="bi bi-stars"></i>
            {{ __('ui.hero.homepage.badge') }}
        </span>
        <h1 class="hero-title mt-3">{{ __('ui.hero.homepage.title') }}</h1>
        <p class="hero-subtitle">{{ __('ui.hero.homepage.subtitle') }}</p>
        <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
            <a class="btn btn-gradient" href="{{ route('article.index') }}">{{ __('ui.hero.homepage.primary_cta') }}</a>
            <a class="btn btn-soft" href="{{ route('article.create') }}">{{ __('ui.hero.homepage.secondary_cta') }}</a>
        </div>
    </x-header>

    <div class="container mt-4">
        <x-errors />
    </div>

    <div class="container py-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
            @forelse ($articles as $article)
                <div class="col d-flex">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <div class="glass-panel text-center">
                        <h5 class="mb-2">{{ __('ui.lists.empty_title') }}</h5>
                        <p class="text-muted mb-0">{{ __('ui.lists.empty_subtitle') }}</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>