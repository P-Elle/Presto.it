<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>

    <div>
        <h1>Un utente ha rischiesto di lavorare con noi</h1>
        <h2>Ecco i sui dati:</h2>
        <p>Nome: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a href="{{route('make.revisor',compact('user'))}}" class="btn btn-success">Rendi revisore</a>
    </div>
    
</body>
</html>