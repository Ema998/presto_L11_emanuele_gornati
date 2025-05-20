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
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>

