<div class="card my-4 mx-2" style="width: 18rem;">
  <img 
    src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}" 
    class="card-img-top" 
    alt="Immagine articolo"
  >
  <div class="card-body">
    <h3 class="card-title">{{ $article->title }}</h3>
    <h4 class="card-subtitle mb-2 text-muted">€ {{ number_format($article->price, 2, ',', '.') }}</h4>
    <p class="card-text">{{ $article->description }}</p>
    <p class="card-text"><small class="text-muted">{{ $article->category->name }}</small></p>
    <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Scopri di più</a>
  </div>
</div>
