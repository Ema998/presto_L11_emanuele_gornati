<x-layout>
    <x-header>
        <h1 class="text-center">MODIFICA UN ARTICOLO</h1>
    </x-header>
    <x-message/>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form wire:submit="updateArticle" class="p-5" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titoloArticolo">Titolo articolo</label>
                        <input wire:model="title" type="text" class="form-control" id="titoloArticolo" required>
                        <div> @error('title') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group">
                        <label for="bodyArticolo">Contenuto</label>
                        <textarea wire:model="body" class="form-control" id="bodyArticolo" rows="3" required></textarea>
                        <div> @error('body') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group">
                        <label for="imgArticolo">Inserisci un'immagine</label>
                        <input wire:model="img" type="file" class="form-control" id="imgArticolo" required>
                        <div> @error('img') {{$message}} @enderror </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

