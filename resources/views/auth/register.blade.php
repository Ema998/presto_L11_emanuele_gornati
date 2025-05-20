<x-layout>
    <x-header>
        <h1 class="text-center">Registrati</h1>
    </x-header>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('register') }}" class="bg-secondary p-4 rounded">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email1">Email</label>
                        <input type="email" class="form-control" id="email1" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="Password1" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="checkPassword">Conferma password</label>
                        <input type="text" class="form-control" id="checkPassword" name="checkPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>