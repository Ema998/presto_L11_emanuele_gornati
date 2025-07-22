<div class="container my-5">
    <form wire:submit.prevent="store" class="p-4 shadow bg-white rounded" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title">Titolo</label>
            <input wire:model.blur="title" type="text" class="form-control" id="title" required>
            @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="description">Descrizione</label>
            <textarea wire:model="description" class="form-control" id="description" rows="3" required></textarea>
            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input wire:model="price" type="number" class="form-control" id="price" required>
            @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="category">Categoria</label>
            <select wire:model="category" class="form-control" id="category">
                <option disabled selected>Seleziona categoria</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="temporary_images">Immagini</label>
            <input wire:model="temporary_images" type="file" id="temporary_images" class="form-control" multiple>
            @error('temporary_images.*') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        @if (!empty($images))
            <div class="mb-3">
                <p>Anteprima Immagini:</p>
                <div class="d-flex flex-wrap gap-3">
                    @foreach ($images as $index => $image)
                        <div class="text-center">
                            <div class="image-preview mb-2" style="background-image: url('{{ $image->temporaryUrl() }}')"></div>
                            <button type="button" class="btn btn-sm btn-danger" wire:click="removeImage({{ $index }})">Rimuovi</button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <button type="submit" class="btn btn-primary mt-5">Pubblica articolo</button>
    </form>
</div>
