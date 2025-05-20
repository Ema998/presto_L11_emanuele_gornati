<x-layout>
    <x-header article="$article">
        <h1 class="text-center">{{$article->title}}</h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 mt-4">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="#" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="#" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="#" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Precedente</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Successivo</span>
                    </button>
                </div>
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