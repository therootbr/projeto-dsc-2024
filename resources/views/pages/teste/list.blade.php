<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de teste</h1>
    @foreach($dados as $dado)
        <li>{{ $dado->nome }}</li>
        <li>{{ $dado->cpf }}</li>
    @endforeach
</body>
</html>