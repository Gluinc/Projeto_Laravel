<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{ route('autor.destroy', $registro->id) }}" method="POST"> 
            @csrf
            @include('autor.__form')
            <button type="submit">Deletar Registro</button>
        </form>
    </div>
</body>
</html>