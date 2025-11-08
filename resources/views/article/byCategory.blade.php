<x-layout>
    <x-header>
        <span class="pill-badge">
            <i class="bi bi-tag"></i>
            {{ __('ui.hero.articles_category.badge') }}
        </span>
        <h1 class="hero-title mt-3">{{ __('ui.hero.articles_category.title', ['name' => $category->name]) }}</h1>
        <p class="hero-subtitle">{{ __('ui.hero.articles_category.subtitle') }}</p>
    </x-header>

    <div class="container py-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
            @forelse ($articles as $article)
                <div class="col d-flex">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <div class="glass-panel text-center">
                        <h5 class="mb-2">{{ __('ui.lists.category_empty_title') }}</h5>
                        <p class="text-muted mb-0">{{ __('ui.lists.category_empty_subtitle') }}</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>