@extends('layouts.master')
@vite('resources/css/app.css')
@section('title', 'home')

@section('content')
<div class="landing">
    <video id="video" height="100%" width="100%" frameborder="0" loop autoplay muted
        src="images/background.mp4">
    </video>

    <div id="landingOverlay">
        <h2>E-cars</h2><br>
        <h6>Created by KamilPLHH</h6>
    </div>
</div>


<div class="parallax-div">
    <div class="parallax first">
        <div class="parallax-inside">
            <div class="parallax-text right">
                <div class="text-header">
                    <h2>About us</h2>
                </div>
                <b>E-cars</b> is a project made for lovers of all type of <b>cars</b> and not only for them!
                As you can see this page is built to <b>catch</b> people eye.             
                Intention of it is <b>simple</b>. Lets show people how our <b>"world"</b> can be amazing.
                Page should bring you a vibe of <b>night</b> time <b>racing</b> like in in fast and furious and so on.
                Go lower and findout more about us and remember
                <h3 style="text-align: center;">Enjoy!</h3>
            </div>
        </div>
    </div>  

    <div class="parallax second">
        <div class="parallax-inside">
            <div class="parallax-text right1">

            </div>
        </div>
    </div>  

    <div class="parallax third">
        <div class="parallax-inside">
            <div class="parallax-text left">

            </div>
        </div>
    </div> 

    <div class="parallax" style="background: url('images/mercedes.jpg') repeat fixed 100%;">
        <div class="parallax-inside">
            <div class="parallax-text right">
                
            </div>
        </div>
    </div> 
</div>

@stop