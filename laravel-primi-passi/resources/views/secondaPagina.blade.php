<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
<div class="container">
        <div>
            {{ $titolo }}
        </div>
        <div class="col-link">
            <a href="{{route('home')}}">Vai alla Home</a>
            <a href="{{route('primaPagina')}}">Vai a pagina 2</a>
        </div>
    </div>
</body>
</html>