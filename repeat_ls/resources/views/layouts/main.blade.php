<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{route('main.index')}}">Main</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('device.index')}}">Devices</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</body>
</html>
