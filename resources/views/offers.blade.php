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
                <img src="{{ url('images/'.$twoKoffer->src) }}">
            </div>

            <div class="car-name">
                {{ twoKoffer->Car }}<br>
                {{ twoKoffer->Price }}<br>
                {{ twoKoffer->Production-start }}-{{ twoKoffer->Production-end }}
            </div>

            <div class="car-description">
                {{ twoKoffer->Country }}<br>
                {{ twoKoffer-> Description }}
            </div>
        </div>
    @endforeach
</div>

<h1 class="block-header" id="two-five"> Cars 2001$-9999$</h1>
<div class="block-area">
    @foreach($tenKoffers as $tenKoffer)
        <div class="block">
            <div class="image">
                <img src="{{ url('images/'.$tenKoffer->src) }}">
            </div>

            <div class="car-name">
                {{ tenKoffer->Car }}<br>
                {{ tenKoffer->Price }}<br>
                {{ tenKoffer->Production-start }}-{{ tenKoffer->Production-end }}
            </div>

            <div class="car-description">
                {{ tenKoffer->Country }}<br>
                {{ tenKoffer-> Description }}
            </div>
        </div>
    @endforeach
</div>

<h1 class="block-header" id="five-onefive"> Cars 10000$+</h1>
<div class="block-area">
    @foreach($plusOffers as $plusOffer)
        <div class="block">
            <div class="image">
                <img src="{{ url('images/'.$tenKoffer->src) }}">
            </div>

            <div class="car-name">
                {{ plusOffer->Car }}<br>
                {{ plusOffer->Price }}<br>
                {{ plusOffer->Production-start }}-{{ plusOffer->Production-end }}
            </div>

            <div class="car-description">
                {{ plusOffer->Country }}<br>
                {{ plusOffer-> Description }}
            </div>
        </div>
    @endforeach
</div>
@stop