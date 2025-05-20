<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="#" alt="{{ $article->title }}">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h3 class="card-title">{{$article->prezzo}}</h3>
    <p class="card-text">{{$article->descrizione}}</p>
    <p class="card-text">{{$article->categoria}}</p>
    <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Scopri di più</a>
  </div>
</div>