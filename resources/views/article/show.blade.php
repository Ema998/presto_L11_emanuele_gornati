<x-layout>
    <x-header>
        <span class="pill-badge">
            <i class="bi bi-box"></i>
            {{ __('ui.hero.articles_show.badge') }}
        </span>
        <h1 class="hero-title mt-3">{{ $article->title }}</h1>
        <p class="hero-subtitle">
            @if($article->user)
                {{ __('ui.hero.articles_show.subtitle', [
                    'time' => $article->created_at?->diffForHumans(),
                    'author' => $article->user->name,
                    'category' => $article->category->name,
                ]) }}
            @else
                {{ __('ui.hero.articles_show.subtitle_no_author', [
                    'time' => $article->created_at?->diffForHumans(),
                    'category' => $article->category->name,
                ]) }}
            @endif
        </p>
    </x-header>

    <div class="container py-5">
        <div class="row g-5 align-items-start">
            <div class="col-12 col-lg-6">
                <div id="articleCarousel{{ $article->id }}" class="carousel slide product-carousel" data-bs-ride="carousel">
                    @if($article->images->count() > 1)
                        <div class="carousel-indicators">
                            @foreach($article->images as $key => $image)
                                <button type="button" data-bs-target="#articleCarousel{{ $article->id }}" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
                            @endforeach
                        </div>
                    @endif

                    <div class="carousel-inner">
                        @if($article->images->isNotEmpty())
                            @foreach ($article->images as $key => $image)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{ $image->getUrl() }}" class="d-block w-100" alt="{{ __('ui.show.image_alt', ['number' => $key + 1]) }}">
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/800/600" class="d-block w-100" alt="{{ __('ui.show.placeholder_alt') }}">
                            </div>
                        @endif
                    </div>

                    @if($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#articleCarousel{{ $article->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Precedente</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#articleCarousel{{ $article->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Successivo</span>
                        </button>
                    @endif
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="glass-panel h-100">
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="{{ route('byCategory', ['category' => $article->category]) }}">
                            <span class="category-chip">
                                <i class="bi bi-tag"></i>
                                {{ $article->category->name }}
                            </span>
                        </a>
                        <span class="text-muted">
                            <i class="bi bi-clock-history me-1"></i>
                            {{ $article->created_at?->translatedFormat('d F Y') }}
                        </span>
                    </div>

                    <h2 class="mt-4 mb-3 text-primary">{{ __('ui.show.price', ['price' => number_format($article->price, 2, ',', '.')]) }}</h2>

                    <p class="lead">{{ $article->description }}</p>

                    <div class="mt-4 d-flex flex-wrap gap-3">
                        <a href="{{ route('article.index') }}" class="btn btn-soft">{{ __('ui.show.back_to_catalog') }}</a>
                        <a href="{{ route('homepage') }}" class="btn btn-gradient">{{ __('ui.show.explore_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>