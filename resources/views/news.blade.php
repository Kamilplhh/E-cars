@extends('layouts.master')
@vite('resources/css/news.css')
@vite('resources/js/news.js')
@section('title', 'News')

@section('content')
<div class="block-area">
    <div class="news-block" id="1">
        <div class="news-description" id="news-description -1">
            Samochod wyprodukowany cos tam cos tam jest git i szybki

            <div class="news-image" style="width:80%; height:60%;">

            </div>
        </div>

        <div class="news-car" id="news-car -1">
            <div class="news-image" style="width:80%; height:70%;">

            </div>
            Samochodzik<br>
            200$<br>
            1903-2004
        </div>
    </div>
</div>

<div class="block-area">
    <div class="news-block" id="2">
        <div class="news-description" id="news-description -2">
            Samochod wyprodukowany cos tam cos tam jest git i szybki

            <div class="news-image" style="width:80%; height:60%;">

            </div>
        </div>

        <div class="news-car" id="news-car -2">
            <div class="news-image" style="width:80%; height:70%;">

            </div>
            Samochodzik<br>
            200$<br>
            1903-2004
        </div>
    </div>
</div>


@stop