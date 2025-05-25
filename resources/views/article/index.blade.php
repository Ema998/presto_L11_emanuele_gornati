<x-layout>
    <h-header>
        <h1 class="text-center">I nostri prodotti</h1>
    </h-header>
    <x-message />
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4 my-5">
                <livewire:filter />
            </div>
            <div class="col-12 col-md-4 my-5">
                @foreach ($articles as $article)
                    <x-card :article="$article" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>