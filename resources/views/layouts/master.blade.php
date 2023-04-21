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
            <a href="/">Garage</a>
            <a href="/Offers">Offers</a>
            <a href="/News">News</a>
            <a href="/Contact">Contact</a>
        </div>
    </div>
        <div class="openNav" id="nav">
            <i class="fa-solid fa-bars" id="openNav"> Open</i>
        </div>    
    </div>

    @show
    <div class="content">
        <div class="landing">
            <video id="video" height="100%" width="100%" frameborder="0" loop autoplay muted
                src="images/background.mp4">
            </video>

            <div id="landingOverlay">
                <h2>E-cars</h2><br>
                <h6>Created by KamilPLHH</h6>
            </div>
        </div>
        @yield('content')
        
    </div>     
</body>

</html>