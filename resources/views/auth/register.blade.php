<x-layout>
    <x-header>
        <h1 class="text-center">Registrati</h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 py-5">
                <form method="POST" action="{{ route('register') }}" class="bg-secondary p-4 rounded">
                    @csrf
                    <x-errors />
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email1" class="mt-2">Email</label>
                        <input type="email" class="form-control" id="email1" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Password1" class="mt-2">Password</label>
                        <input type="password" class="form-control" id="Password1" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="mt-2">Conferma password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>