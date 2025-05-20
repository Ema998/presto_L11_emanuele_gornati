
<div class="container my-4">
    <div class="row mb-3">
        <select wire:model="selectedCategories" multiple class="form-select" size="5">
            @foreach($categories as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        @foreach($filteredArticles as $article)
            <div class="col-md-4 mb-4">
                <x-card :article="$article" />
            </div>
        @endforeach
    </div>
</div>
