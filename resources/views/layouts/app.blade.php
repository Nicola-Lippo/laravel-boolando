<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolando laravel</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    @include('shared.header')
    <!--creo un buco da riempire con yeld-->
    @yield('main')
    @include('shared.footer')
</body>

</html>
