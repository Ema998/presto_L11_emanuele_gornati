<x-layout>
    <h-header>
        <h1 class="text-center">I nostri articoli</h1>
    </h-header>
    <div class="container">
        <div class="row justify-content-center align-items-center py-5">
           <!-- {{-- <div class="col-12 col-md-4 my-5 w-100">
                <livewire:filter />
            </div> --}} -->
            <div class="col-12 col-md-3 my-5">
                @foreach ($articles as $article)
                    <x-card :article="$article" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>