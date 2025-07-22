<x-layout>
    <x-header article="$article">
        <h1 class="text-center">{{$article->title}}</h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 mt-4">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @if($article->images->count() > 0)
                            @foreach($article->images as $key => $image)
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
                            @endforeach
                        @endif
                    </div>
                    <div class="carousel-inner">
                        @foreach ($article->images as $key => $image)
                            <div class="carousel-item active">
                                <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow">
                            </div>
                        @endforeach
                    </div>
                    @if($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Precedente</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Successivo</span>
                        </button>
                    @endif
                </div>
                @if($article->images->isEmpty())
                    <h5 class="text-ceneter">Non sono presenti foto</h5>
                @endif
            </div>
            <div class="col-12 col-md-6 my-4">
                <h3 class="text-center">{{$article->title}}</h3>
                <h5 class="text-center">{{$article->description}}</>
                <h4 class="text-center">Prezzo: {{$article->price}} €</h4>
                <h5 class="text-center">Categoria: {{$article->category->name}}</h5>
            </div>
        </div>
    </div>
</x-layout>