<html>

<head>
    <title>E-cars - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    @vite('resources/js/app.js')
    @section('navbar')
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
        <div class="overlay-content">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <span style="font-size:30px;cursor:pointer" id="openNav">&#9776; open</span>
    </div>

    @show

    <div class="content">
        @yield('content')

    </div>
</body>

</html>