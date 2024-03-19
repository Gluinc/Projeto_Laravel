<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form>
            @csrf
            @include('autor.__form')
            <a href="{{ route('autor.index') }}">Cancelar</a>
        </form>
    </div>
</body>
</html>