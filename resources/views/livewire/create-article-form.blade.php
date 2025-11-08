<div class="create-article my-5">
    <form wire:submit.prevent="store" class="glass-panel" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label fw-semibold">{{ __('ui.form.title') }}</label>
            <input wire:model.blur="title" type="text" class="form-control form-control-lg" id="title" placeholder="{{ __('ui.form.title_placeholder') }}" required>
            @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-semibold">{{ __('ui.form.description') }}</label>
            <textarea wire:model="description" class="form-control" id="description" rows="4" placeholder="{{ __('ui.form.description_placeholder') }}" required></textarea>
            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-semibold">{{ __('ui.form.price') }}</label>
            <div class="input-group">
                <span class="input-group-text">€</span>
                <input wire:model="price" type="number" step="0.01" min="0" class="form-control" id="price" placeholder="{{ __('ui.form.price_placeholder') }}" required>
            </div>
            @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label fw-semibold">{{ __('ui.form.category') }}</label>
            <select wire:model="category" class="form-select" id="category">
                <option value="" disabled selected>{{ __('ui.form.category_placeholder') }}</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="temporary_images" class="form-label fw-semibold">{{ __('ui.form.images') }}</label>
            <input wire:model="temporary_images" type="file" id="temporary_images" class="form-control" multiple>
            @error('temporary_images.*') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        @if (!empty($images))
            <div class="mb-3">
                <p>{{ __('ui.form.preview') }}</p>
                <div class="d-flex flex-wrap gap-3">
                    @foreach ($images as $index => $image)
                        <div class="text-center">
                            <div class="image-preview mb-2" style="background-image: url('{{ $image->temporaryUrl() }}')"></div>
                            <button type="button" class="btn btn-sm btn-outline-danger" wire:click="removeImage({{ $index }})">{{ __('ui.form.remove') }}</button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <button type="submit" class="btn btn-gradient w-100">{{ __('ui.form.submit') }}</button>
    </form>
</div>
