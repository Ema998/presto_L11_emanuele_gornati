<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>{{$user->name}} ha inviato una candidatura</h1>
        <a href="{{route('makeRevisor', compact('user'))}}" class="btn btn-primary">Accetta candidatura</a>
    </div>
</body>
</html>