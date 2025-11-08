<div class="card article-card">
  <img 
    src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : Vite::asset('resources/img/placeholder.png') }}" 
    class="card-img-top" 
    alt="Immagine articolo"
  >
  <div class="card-body">
    <h3 class="card-title">{{ $article->title }}</h3>
    <p class="card-subtitle mb-0">{{ __('ui.cards.price', ['price' => number_format($article->price, 2, ',', '.')]) }}</p>
    <p class="card-text">{{ $article->description }}</p>

    <div class="article-meta">
        <a href="{{ route('byCategory', ['category' => $article->category]) }}">
          <span class="category-chip">
              <i class="bi bi-tag"></i>
              {{ $article->category->name }}
          </span>
        </a>
        <span>
            <i class="bi bi-clock-history me-1"></i>
            {{ __('ui.cards.published', ['time' => $article->created_at?->diffForHumans()]) }}
        </span>
    </div>

    <a href="{{ route('article.show', $article->id) }}" class="btn btn-gradient w-100 mt-4">{{ __('ui.cards.cta') }}</a>
  </div>
</div>
