<x-layout>
    <x-header>
        <h1 class="text-center">Presto.it</h1>
    </x-header>
    <x-errors />
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4">
                @foreach ($articles as $article)
                    <x-card :article="$article" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>