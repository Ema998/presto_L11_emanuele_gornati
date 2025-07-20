<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="#" alt="{{ $article->title }}">
  <div class="card-body">
    <h3 class="card-title">{{$article->title}}</h3>
    <h4 class="card-subtitle">{{$article->price}}</h4>
    <p class="card-text">{{$article->description}}</p>
    <p class="card-text">{{$article->category->name}}</p>
    <img src="{{ $article->images->isNotEmpty() ? Storage::uri($article->images->first()->getUrl(300, 300)) : 'https://picsum.photos/200' }}" class="card-img-top">
    <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Scopri di più</a>
  </div>
</div>