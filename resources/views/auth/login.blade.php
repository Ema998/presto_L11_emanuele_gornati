<x-layout>
    <x-header>
        <span class="pill-badge">
            <i class="bi bi-box-arrow-in-right"></i>
            {{ __('ui.hero.auth_login.badge') }}
        </span>
        <h1 class="hero-title mt-3">{{ __('ui.hero.auth_login.title') }}</h1>
        <p class="hero-subtitle">{{ __('ui.hero.auth_login.subtitle') }}</p>
    </x-header>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{ route('login') }}" class="glass-panel">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">{{ __('ui.form.email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('ui.form.email_placeholder') }}" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">{{ __('ui.form.password') }}</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('ui.form.password_placeholder') }}" required>
                    </div>

                    <button type="submit" class="btn btn-gradient w-100">{{ __('ui.auth.login_button') }}</button>
                </form>
                <div class="mt-3">
                    <x-errors :errors="$errors" />
                </div>
            </div>
        </div>
    </div>
</x-layout>