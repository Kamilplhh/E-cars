@extends('layouts.master')
@vite('resources/css/app.css')
@section('title', 'home')

@section('content')
<div class="landing">
    <video id="video" height="100%" width="100%" frameborder="0" loop autoplay muted
        src="images/background.mp4">
    <video>
</div>
<div class="landingOverlay">
    <h3>Welcome to E-cars where u can find szybkie i dobre electronic cars</h3>
    <br>
    <h4>Created by KamilPLHH</h4>
</div>

<div class="div">
    <div class="parallax">
        <div class="parallax-1" id="1">
        </div>
    </div>  
    <div class="parallax-2">
        <div class="parallax-1" id="1">
        </div>
    </div>  
</div>

@stop