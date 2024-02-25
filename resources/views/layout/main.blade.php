<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', $applicationName)
    </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.ts'])
</head>

<body class="body">
    <div id="app">
        <the-aside></the-aside>
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
