<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <header>
            <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="{{ route ('home') }}" >Home</a>
            <a class="nav-link" href="{{ route ('cars') }}">Cars</a>
            </nav>
        </header>
        <main>
            <h1>{{$page_title}}</h1>
        </main>

    </body>
</html>
