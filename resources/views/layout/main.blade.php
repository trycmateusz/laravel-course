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
        <the-navigation></the-navigation>
        <div class="main-sidebar-wrapper">
            <the-sidebar :links="{{ json_encode([
                [
                " id"=> 1,
                "text" => "Users",
                "to" => route('get.users')
                ],
                [
                "id" => 2,
                "text" => "Create",
                "to" => route('get.user.create')
                ],
                ]) }}"></the-sidebar>
            <main class="main">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>