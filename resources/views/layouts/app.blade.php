<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- lo yield nel title ci permette di modificare in ognio pagina il titolo--}}
    <title>@yield('title', 'Homepage')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    {{-- includiamo il partial con dentro l'header --}}
    @include('partials.header')

    <main>
        {{-- inseriamo la parte di contenuto delle varie pagine --}}
        @yield('content')
    </main>

    {{-- includiamo il partial con dentro il footer --}}
    @include('partials.footer')
    
</body>
</html>