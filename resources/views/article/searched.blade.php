<x-layout>
    <h-header>
        <h1 class="text-center">Risultati della ricerca</h1>
    </h-header>
    <x-message />
    <x-errors />
    <div class="container-fluid">
        <div class="row p-5 justify-content-center align-items-center">
            @if ($articles->isEmpty())
                <div class="col-12 text-center">
                    <p class="text-center">Nessun articolo trovato</p>
                </div>
            @else
                @foreach ($articles as $article)
                    <div class="col-12 col-md-4">
                        <x-card :article="$article" />
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-layout>