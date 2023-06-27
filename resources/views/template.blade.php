<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
<body>
    <div class="container-fluid bg-primary navbar navbar--height">
        <div class="container">
            <nav>
                @yield('navbar-nav')
            </nav>
        </div>
    </div>
    <div class="container-fluid px-0">
            @yield('main')
    </div>
    <div class="container-fluid px-0 bg-dark py-5">
        <div class="container footer">
            <div class="row">
                <div class="col-2 d-flex flex-column">
                    <h3>Solution</h3>
                    <a href="">Solutions</a>
                    <a href="">Comics</a>
                    <a href="">Ordina</a>
                    <a href="">Support</a>
                </div>
                <div class="col-2 d-flex flex-column">
                    <h3>Solution</h3>
                    <a href="">Solutions</a>
                    <a href="">Comics</a>
                    <a href="">Ordina</a>
                    <a href="">Support</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>