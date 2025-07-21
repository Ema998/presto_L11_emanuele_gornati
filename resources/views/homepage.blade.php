<x-layout>
    <x-header>
        <h1 class="text-center">Presto.it</h1>
    </x-header>
    <x-errors />
    <div class="container-fluid">
        <div class="row justify-content-center">
            @forelse ($articles as $article)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h5 class="text-center">
                        Nessun articolo da mostrare
                    </h5>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>