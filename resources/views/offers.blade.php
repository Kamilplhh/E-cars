@extends('layouts.master')
@vite('resources/css/offers.css')
@section('title', 'Offers')

@section('content')

<i class="fa-solid fa-angle-down fa-xl fa-beat offers" id="offersNavbutton" style="color:black;"></i>
<div id="offersNav" class="offersNav">
    <div class="offersNav-content">
        <a href="#five-two">500$-2000$<br></a>
        <a href="#two-five">2000$-5000$<br></a>
        <a href="#five-onefive">5000$-15000$</a>
    </div>
</div>

<h1 class="block-header" id="five-two"> Cars 500$-2000$</h1>
<div class="block-area">
    <div class="block">
        <div class="image">
        </div>

        <div class="car-name">
            Samochodzik<br>
            200$<br>
            1903-2004
        </div>

        <div class="car-description">
            Samochod wyprodukowany cos tam cos tam jest git i szybki
        </div>
    </div>

<h1 class="block-header" id="two-five"> Cars 2000$-5000$</h1>
<div class="block-area">
    <div class="block">
        <div class="image">
        </div>

        <div class="car-name">
            Samochodzik<br>
            200$<br>
            1903-2004
        </div>

        <div class="car-description">
            Samochod wyprodukowany cos tam cos tam jest git i szybki
        </div>
    </div>
</div>

<h1 class="block-header" id="five-onefive"> Cars 5000$-15000$</h1>
<div class="block-area">
    <div class="block">
        <div class="image">
        </div>

        <div class="car-name">
            Samochodzik<br>
            200$<br>
            1903-2004
        </div>

        <div class="car-description">
            Samochod wyprodukowany cos tam cos tam jest git i szybki
        </div>
    </div>

</div>
@stop