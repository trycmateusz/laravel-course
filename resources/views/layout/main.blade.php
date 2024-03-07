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
        @include('shared.navigation')
        <div class="main-sidebar-wrapper">
            @include('shared.sidebar')
            <main class="main">
                @if (!session()->exists('flashSuccessIgnoreInitially') && session()->exists('flashSuccess'))
                <the-flash-message :result={{ session()->get('flashSuccess') }}></the-flash-message>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
