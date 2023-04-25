@extends('layouts.master')
@vite('resources/css/offers.css')
@vite('resources/js/offers.js')
@section('title', 'Offers')

@section('content')

<i class="fa-solid fa-angle-down fa-xl fa-beat offers" id="offersNavbutton" style="color:black;"></i>
<div id="offersNav" class="offersNav">
    <div class="offersNav-content">
        <a href="#five-two">500$-2000$<br></a>
        <a href="#two-five">2001$-9999$<br></a>
        <a href="#five-onefive">10000$+</a>
    </div>
</div>

<h1 class="block-header" id="five-two"> Cars 500$-2000$</h1>
<div class="block-area">
    @foreach($twoKoffers as $twoKoffer)
        <div class="block">
            <div class="image">
                <img style="width: 100%; height: 100%; border-radius: 1%;" src="{{ url('images/'.$twoKoffer->src) }}">
            </div>

            <div class="car-name">
                {{ $twoKoffer->Car }}<br>
                {{ $twoKoffer->Country }}<br>
                {{ $twoKoffer->Price }}$<br>
                Start {{ $twoKoffer->Production_start }} - End {{ $twoKoffer->Production_end }}
            </div>

            <div class="car-description">
                {{ $twoKoffer-> Description }}
            </div>
        </div>
    @endforeach
</div>

<h1 class="block-header" id="two-five"> Cars 2001$-9999$</h1>
<div class="block-area">
    @foreach($tenKoffers as $tenKoffer)
        <div class="block">
            <div class="image">
            <img style="width: 100%; height: 100%; border-radius: 1%;"  src="{{ url('images/'.$tenKoffer->src) }}">
            </div>

            <div class="car-name">
                {{ $tenKoffer->Car }}<br>
                {{ $tenKoffer->Price }}$<br>
                Start {{ $tenKoffer->Production_start }} - End {{ $tenKoffer->Production_end }}
            </div>

            <div class="car-description">
                {{ $tenKoffer-> Description }}
            </div>
        </div>
    @endforeach
</div>

<h1 class="block-header" id="five-onefive"> Cars 10000$+</h1>
<div class="block-area">
    @foreach($plusOffers as $plusOffer)
        <div class="block">
            <div class="image">
            <img style="width: 100%; height: 100%; border-radius: 1%;" src="{{ url('images/'.$plusOffer->src) }}">
            </div>

            <div class="car-name">
                {{ $plusOffer->Car }}<br>
                {{ $twoKoffer->Country }}<br>
                {{ $plusOffer->Price }}$<br>
                Start {{ $plusOffer->Production_start }} - End {{ $plusOffer->Production_end }}
            </div>

            <div class="car-description">
                {{ $plusOffer-> Description }}
            </div>
        </div>
    @endforeach
</div>
@stop