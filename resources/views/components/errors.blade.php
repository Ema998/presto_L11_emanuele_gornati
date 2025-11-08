@if ($errors->any())
    <div class="alert alert-danger glass-panel">
        <p class="fw-semibold mb-2">{{ __('ui.alerts.errors_title') }}</p>
        <ul class="mb-0 ps-3">
            @foreach($errors->all() as $error)
                <li class="mb-1">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif