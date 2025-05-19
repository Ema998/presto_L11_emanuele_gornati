<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">immagine</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <th scope="row">{{ $article->id }}</th>
                            <td>{{$article->title}}</td>
                            <td>{{$article->body}}</td>
                            <td><{{ $article->img }}</td>
                            <td>
                                <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Vai al dettaglio</a>
                                <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-secondary">Modifica</a>
                                <button wire:click="destroy($article)" class="btn btn-danger">Elimina</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
