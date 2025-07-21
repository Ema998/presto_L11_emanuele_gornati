<x-layout>
    <x-header>
        <h1 class="text-center">Dashboard</h1>
    </x-header>
    <div class="container">
        @if($articlesToCheck)
            <div class="row justify-content-center py-5">
                <div class="col-12 col-md-8">
                    <div class="row">
                        @if($articlesToCheck->images->count())
                            @foreach($articlesToCheck->images as $key => $image)
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100">
                                        <img src="{{ $image->getUrl(300, 300)}}" class="card-img-top rounded" alt="Immagine {{ $key + 1 }}">
                                        <div class="card-body">
                                            <h5 class="card-title">Labels</h5>
                                            @if ($image->labels)
                                                <p>
                                                    @foreach ($image->labels as $label)
                                                        <span class="badge bg-secondary">#{{ $label }}</span>
                                                    @endforeach
                                                </p>
                                            @else
                                                <p class="fst-italic">No labels</p>
                                            @endif
                                            <h5 class="mt-3">Ratings</h5>
                                            @php
                                                $ratings = ['adult', 'violence', 'spoof', 'racy', 'medical'];
                                            @endphp
                                            @foreach ($ratings as $rating)
                                                <div class="d-flex justify-content-between">
                                                    <span class="text-capitalize">{{ $rating }}</span>
                                                    <span class="{{ $image->$rating }}">{{ $image->$rating }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mt-5">
                        <h2>{{ $articlesToCheck->title }}</h2>
                        <p class="mb-1"><strong>Prezzo:</strong> € {{ $articlesToCheck->price }}</p>
                        <p class="mb-1"><strong>Descrizione:</strong> {{ $articlesToCheck->description }}</p>
                        <p class="mb-3"><strong>Categoria:</strong> {{ $articlesToCheck->category->name }}</p>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <form action="{{ route('reject', ['article' => $articlesToCheck]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger px-4 fw-bold">Rifiuta</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $articlesToCheck]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success px-4 fw-bold">Accetta</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center py-5">
                <div class="col-12 text-center">
                    <h3>Non ci sono articoli da revisionare</h3>
                </div>
            </div>
        @endif
    </div>
</x-layout>
