<div class="container my-5">
        <div class="row justify-content-around align-items-center">
            <div class="col-12 col-md-6">
                <img src="{{ asset('storage/' . $article->img) }}" class="card-img-top" alt="...">
            </div>
            <div class="col-12 col">
                <p>{{ $article->name }}</p>
                <p>{{ $article->body }}</p>
            </div>
        </div>
</div>
