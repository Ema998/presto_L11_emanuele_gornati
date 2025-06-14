<x-layout>
    <x-header>
        <h1 class="text-center">Dashboard</h1>
    </x-header>
    <x-message />
    <div class="container">
        @if($articlesToCheck)
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <div class="row justify-content-center align-items-center">
                        @for($i=0; $i<5; $i++)
                            <div class="col-6 col-md-4">
                                <img src="" alt="image" class="img-fluid">
                            </div>
                        @endfor
                        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                            <div>
                                <h1>{{ $articlesToCheck->title }}</h1>
                                <h3>{{ $articlesToCheck->price }}</h3>
                                <h3>{{ $articlesToCheck->description }}</h3>
                                <h3>{{ $articlesToCheck->category->name }}</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('reject', ['article'=>$articlesToCheck]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                                </form>
                                <form action="{{ route('accept', ['article'=>$articlesToCheck]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h3 class="text-center">
                        Non ci sono articoli da revisionare
                    </h3>
                </div>
            </div>
    </div>
</x-layout>