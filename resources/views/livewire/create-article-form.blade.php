    <x-message/>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form wire:submit="store" class="p-5 my-5 bg-body-tertiary shadow rounded" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titolo">Titolo</label>
                        <input wire:model="title" type="text" class="form-control" id="titolo" required>
                        <div> @error('title') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group">
                        <label for="body">Descrizione</label>
                        <textarea wire:model="body" class="form-control" id="body" rows="3" required></textarea>
                        <div> @error('body') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group">
                        <label for="titolo">Prezzo</label>
                        <input wire:model="prezzo" type="text" class="form-control" id="prezzo" required>
                        <div> @error('price') {{$message}} @enderror </div>
                    </div>
                    <div class="form-group mb-3">
                        <select id="category" wire:model="category" class="form-control">
                            <option label disabled>Seleziona una categoria</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <div> @error('category') {{$message}} @enderror </div>
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
                                            <button type="button" class="btn mt-1 btn-danger" wiew:click="removeImage({{ $key }})">Rimuovi</button>
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

