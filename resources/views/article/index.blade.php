<x-layout>
    <x-header>
        <h1 class="text-center">I nostri articoli</h1>
    </x-header>
    <div class="container-fluid">
        <div class="row justify-content-center py-5">
           <!-- {{-- <div class="col-12 col-md-4 my-5 w-100">
                <livewire:filter />
            </div> --}} -->
            @forelse ($articles as $article)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Nessun Articolo da mostrare</p>
            @endforelse
        </div>
    </div>
</x-layout>