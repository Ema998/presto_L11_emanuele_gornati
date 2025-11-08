<x-layout>
    <x-header>
        <span class="pill-badge">
            <i class="bi bi-shield-check"></i>
            {{ __('ui.hero.revisor.badge') }}
        </span>
        <h1 class="hero-title mt-3">{{ __('ui.hero.revisor.title') }}</h1>
    </x-header>
    <div class="container">
        @if($articlesToCheck)
            <div class="row justify-content-center py-5">
                <div class="col-12 col-md-8">
                    <div class="row">
                        @if($articlesToCheck->images->count())
                            @foreach($articlesToCheck->images as $key => $image)
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100">
                                        <img src="{{ $image->getUrl(300, 300)}}" class="card-img-top rounded" alt="{{ __('ui.revisor.image_alt', ['number' => $key + 1]) }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('ui.revisor.labels') }}</h5>
                                            @if ($image->labels)
                                                <p>
                                                    @foreach ($image->labels as $label)
                                                        <span class="badge bg-secondary">#{{ $label }}</span>
                                                    @endforeach
                                                </p>
                                            @else
                                                <p class="fst-italic">{{ __('ui.revisor.no_labels') }}</p>
                                            @endif
                                            <h5 class="mt-3">{{ __('ui.revisor.ratings') }}</h5>
                                            @php
                                                $ratings = ['adult', 'violence', 'spoof', 'racy', 'medical'];
                                            @endphp
                                            @foreach ($ratings as $rating)
                                                <div class="d-flex justify-content-between">
                                                    <span class="text-capitalize">{{ __('ui.revisor.' . $rating) }}</span>
                                                    <span>
                                                        <i class="{{ $image->$rating }}"></i>
                                                    </span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="mt-5">
                        <h2>{{ $articlesToCheck->title }}</h2>
                        <p class="mb-1"><strong>{{ __('ui.revisor.price') }}:</strong> € {{ $articlesToCheck->price }}</p>
                        <p class="mb-1"><strong>{{ __('ui.revisor.description') }}:</strong> {{ $articlesToCheck->description }}</p>
                        <p class="mb-3"><strong>{{ __('ui.revisor.category') }}:</strong> {{ $articlesToCheck->category->name }}</p>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <form action="{{ route('reject', ['article' => $articlesToCheck]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger px-4 fw-bold">{{ __('ui.revisor.reject') }}</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $articlesToCheck]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success px-4 fw-bold">{{ __('ui.revisor.accept') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center py-5">
                <div class="col-12 text-center">
                    <h3>{{ __('ui.revisor.empty') }}</h3>
                </div>
            </div>
        @endif
    </div>
</x-layout>
