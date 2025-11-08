<div class="container my-4 p-4 border rounded shadow-sm bg-light">
    <div class="row mb-3">
        <label for="categoryFilter" class="form-label fw-bold">{{ __('ui.filter.title') }}</label>
        <select 
            id="categoryFilter"
            wire:model="selectedCategories" 
            multiple 
            class="form-select" 
            size="6" 
            style="min-height: 200px;"
            aria-describedby="categoryHelp"
        >
            <option value="all" class="fw-bold">{{ __('ui.filter.all') }}</option>
            @foreach($categories as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="row g-4">
        @forelse($filteredArticles as $article)
            <div class="col-md-4">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center" role="alert">
                    {{ __('ui.filter.empty') }}
                </div>
            </div>
        @endforelse
    </div>
</div>
