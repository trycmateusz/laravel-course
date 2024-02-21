<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', $applicationName)
    </title>
</head>

<body>
    <h1>
        {{ $applicationName }}
    </h1>
    <aside>
        @section('aside')
        <ul>
            <li>
                <a href="#">
                    Link jakis
                </a>
            </li>
        </ul>
        @show
    </aside>
    <main>
        @yield('content')
    </main>
</body>

</html>