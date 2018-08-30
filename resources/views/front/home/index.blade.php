@extends('front.layout.master')

@section('content')
    <div class="banner">
        <div class="container">
            <h2>Welcome to our News Channel</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <a href="#">READ ARTICLE</a>
        </div>
    </div>

    <!-- technology -->
    <div class="technology">
        <div class="container">
           @include('front.home.index.all_news_left')
            @include('front.includes.right_sidebar')
            <div class="clearfix"></div>
            <!-- technology-right -->
        </div>
    </div>
    <!-- technology -->

@endsection