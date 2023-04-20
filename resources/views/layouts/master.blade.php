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
            <a href="#">Garage</a>
            <a href="#">Offers</a>
            <a href="#">News</a>
            <a href="#">Contact</a>
        </div>
    </div>
        <div class="openNav">
            <i class="fa-solid fa-bars" id="openNav"> Open</i>
        </div>    
    </div>

    @show

    <div class="content">
        @yield('content')

    </div>
</body>

</html>