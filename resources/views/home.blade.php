@extends('layouts.master')
@vite('resources/css/app.css')
@section('title', 'home')

@section('content')
<div class="landing">
    <iframe id="iframe" height="100%" width="100%" frameborder="0" autoplay 
        src="https://www.youtube.com/embed/31kplxJn6nw?autoplay=1">
    </iframe>

</div>
<div class="landingOverlay">
    <h3>Welcome to E-cars where u can find szybkie i dobre electronic cars</h3>
    <br>
    <h4>Created by KamilPLHH</h4>
</div>
@stop