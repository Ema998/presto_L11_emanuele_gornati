<div> 
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form wire:submit="store" class="p-5 my-5 bg-body-tertiary shadow rounded" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titolo">Titolo</label>
                        <input wire:model.blur="title" type="text" class="form-control" id="titolo" required>
                        <div> @error('title') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group">
                        <label for="body">Descrizione</label>
                        <textarea wire:model.blur="description" class="form-control" id="body" rows="3" required></textarea>
                        <div> @error('description') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input wire:model.blur="price" type="text" class="form-control" id="price" required>
                        <div> @error('price') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <select id="category" wire:model.blur="category" class="form-control">
                            <option label disabled selected>Seleziona una categoria</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <div> @error('category') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="file" wire:model.blur="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                        @error('temporary_images.*')
                           <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                        @error('temporary_images')
                            <p class="fst-italic text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    @if (!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>Photo Preview:</p>
                                <div class="row-border border-4 border-success rounded shadow py-4">
                                    @foreach($images as $key => $image)
                                        <div class="col d-flex flex-column align-items-center my-3">
                                            <div class="image-preview mx-auto shadow rounded" style="background-image: url({{ $image->temporaryUrl() }});">
                                            </div>
                                            <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{ $key }})">Rimuovi</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</div>
