@extends('layouts.master')
@vite('resources/css/news.css')
@vite('resources/js/news.js')
@section('title', 'News')

@section('content')
<div class="block-area">
    @foreach($news as $info)
    <div class="news-block" id="{{ info->id }}">
        <div class="news-description" id="news-description -{{ info->id }}">
            {{ info->Description }}

            <div class="news-image" style="width:80%; height:60%;">
                <img src="{{ url('images/'.info->src) }}">
            </div>
        </div>

        <div class="news-car" id="news-car -1">
            <div class="news-image" style="width:80%; height:70%;">
                <img src="{{ url('images/'.info->src) }}">
            </div>
            {{ info->Car }}<br>
            {{ info->Price }}<br>
            {{ info->Production-start }}-{{ info->Production-end }}
        </div>
    </div>
    @endforeach
</div>

@stop