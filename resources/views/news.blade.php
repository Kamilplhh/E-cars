@extends('layouts.master')
@vite('resources/css/news.css')
@vite('resources/js/news.js')
@section('title', 'News')

@section('content')
<div class="block-area">
    @foreach($news as $info)
    <div class="news-block" id="{{ $info->id }}">
        <div class="news-description" id="news-description -{{ $info->id }}">
            {{ $info->Description }}

            <div class="news-image">
                <img style="width: 70%; height: 90%; margin-left:15%; border-radius: 1%;" src="{{ url('images/'.$info->src) }}">
            </div>
        </div>

        <div class="news-car" id="news-car -1">
            <div class="news-image" style="width:80%; height:70%;">
                <img style="width: 100%; height: 100%; border-radius: 1%;" src="{{ url('images/'.$info->src) }}">
            </div>
            {{ $info->Car }}<br>
            {{ $info->Price }}$<br>
            Start {{ $info->Production_start }} - End {{ $info->Production_end }}
        </div>
    </div>
    @endforeach
</div>

@stop