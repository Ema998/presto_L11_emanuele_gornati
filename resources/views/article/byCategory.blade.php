<x-layout>
    <x-header>
        <h1 class="text-center">Articoli di {{$category->name}}</h1>
    </x-header>
    <div class="row justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12 text-center">
                <h3 class="text-center">
                    Nessun articolo trovato per la categoria selezionata
                </h3>
            </div>
        @endforelse
    </div>
</x-layout>