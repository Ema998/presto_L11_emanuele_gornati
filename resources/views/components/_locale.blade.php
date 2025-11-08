<form action="{{ route('setLocale', $lang) }}" method="POST" class="d-inline">
    @csrf
    <button class="btn nav-locale border-0 shadow-none bg-transparent p-0" type="submit" aria-label="{{ __('ui.navbar.change_language', ['lang' => strtoupper($lang)]) }}">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="28" height="28" class="rounded-circle shadow-sm" alt="Bandiera {{ strtoupper($lang) }}" />
        <span class="d-none d-lg-inline fw-semibold text-uppercase">{{ $lang }}</span>
    </button>
</form>