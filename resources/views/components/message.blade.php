@php
    $flashMessages = [
        'success' => 'alert-success',
        'message' => 'alert-success',
        'error' => 'alert-danger',
        'warning' => 'alert-warning',
    ];
@endphp

@foreach ($flashMessages as $key => $class)
    @if (session()->has($key))
        <div class="alert {{ $class }} glass-panel" role="alert">
            {{ session($key) }}
        </div>
    @endif
@endforeach