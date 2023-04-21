@extends('layouts.master')
@vite('resources/css/app.css')
@section('title', 'Garage')

@section('content')
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
                <h3 style="text-align: center; margin-top: 1vh;">Enjoy!</h3>
            </div>
        </div>
    </div>  

    <div class="parallax second">
        <div class="parallax-inside">
            <div class="parallax-text right1">
                <div class="text-header">
                    <h2>What I can find here?</h2>
                </div>
                Answer is simple, things you were looking in moment you choose this website.<br>
                <a href="/Offers">Offers</a> page is for best price-quality ratio cars you can get at diffrent price pools.
                At <a href="/News">news</a> section we are trying to post fresh information about upcoming cars or intresting mods that were recently made.
            </div>
        </div>
    </div>  

    <div class="parallax third">
        <div class="parallax-inside">
            <div class="parallax-text center">
                “You Know I Would’ve Won That Race If You Didn’t Cheat, Right?” <br>
                – Brian O’Conner
            </div>
        </div>
    </div> 

    <div class="parallax" style="background: url('images/mercedes.jpg') repeat fixed 100%;">
        <div class="parallax-inside">
            <div class="parallax-text left">
            <div class="text-header">
                    <h2>Site same as background</h2>
                </div>
                Remember, this site is just for a project. There are 0 commercial intentions overhere. It was designed with idea to make u feel vibe of some "dark unlegal racing stuff".<br>
                <b>Hope u enyojed your visit here. In contact section you can find my socials and github link. Much love!
            </div>
        </div>
        <a href="#nav"> <i class="fa-solid fa-arrow-up fa-bounce fa-xl back" style="color:black;"></i> </a>
    </div> 
</div>

@stop