@extends('layouts.site-layout')

@section('content')
    <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/news.jpg')}}); background-size: cover;">

        <h2 class="display">News And Events</h2>
        <p class=" my-3">Stay connected with us through the various events.
        </p>

    </div>
    <br><br><br>
    <!--Details start Here-->
    <div class="row">
        <div class="col-lg-12"> <h4 style="text-align: center;">{{$news_events->title}}</h4></div>
        <hr>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-1 text-muted" style="text-align: center;">{{\Carbon\Carbon::parse($news_events->date)->format('M d')}} {{$news_events->location}}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card" >
                <img src="{{asset('events/'.$news_events->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">{{$news_events->title}}</h5>
                    <hr>
                    <p class="text-justify">
                        {{$news_events->content}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!--Details start Here-->
    <br><br>
    @if($photos->count())

        <div class="row">
            <div class="col-lg-12"> <h4 style="text-align: center;">Gallery</h4></div>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12"></div>
        </div>
        </div>

        <div class="container gallery">

            <div class="row">
                @foreach($photos as $photo)
                <div class="col-sm-4">
                    <div class="item"><img src="{{asset('gallery/'.$photo->image)}}" class="img-fluid"></div>
                </div>
                    @endforeach

            </div>

        </div>
        </div>
    @endif

    @endsection