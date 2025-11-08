<x-layout>
    <x-header>
        <span class="pill-badge">
            <i class="bi bi-plus-circle"></i>
            {{ __('ui.hero.articles_create.badge') }}
        </span>
        <h1 class="hero-title mt-3">{{ __('ui.hero.articles_create.title') }}</h1>
        <p class="hero-subtitle">{{ __('ui.hero.articles_create.subtitle') }}</p>
    </x-header>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-6">
                <livewire:create-article-form />
            </div>
        </div>
    </div>
</x-layout>