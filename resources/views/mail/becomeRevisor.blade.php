<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrestoTeam</title>
</head>
<body>
    <div>
        <h1>Un utente ha inviato una candidatura per la posizione di revisore</h1>
        <h3>{{$user->name}}</h3>
        <h3>{{$user->email}}</h3>
        <a href="{{route('makeRevisor', compact('user'))}}" class="btn btn-primary">Accetta candidatura</a>
    </div>
</body>
</html>