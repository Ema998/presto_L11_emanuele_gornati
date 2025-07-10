<x-layout>
    <x-header>
        <h1 class="text-center">Login</h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('login') }}" class="bg-secondary p-4 rounded">
                    @csrf
                    <div class="form-group">
                        <label for="email1">Email</label>
                        <input type="email" class="form-control" id="email1"placeholder="Inserisci email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="Password1" placeholder="Inserisci Password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
                <x-errors :errors="$errors" />
            </div>
        </div>
    </div>
</x-layout>