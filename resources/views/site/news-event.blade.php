@extends('layouts.site-layout')


@section('content')
    <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/news.jpg')}}); background-size: cover;">

        <h2 class="display">News And Events</h2>
        <p class=" my-3">Stay connected with us through the various events.
        </p>

    </div>

    <div class="container">

        <div class="row mb-2">

            @foreach($allnews as $event)
            <div class="col-md-6" id="newsdetail1">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{$event->location}}</strong>
                        <h5 class="mb-0">{{$event->title}}</h5>
                        <div class="mb-1 text-muted">{{\Carbon\Carbon::parse($event->date)->format('M d')}}</div>
                        <p class="card-text mb-auto">
                            @if(strlen($event->content) > 50)
                                {{ substr($event->content, 0, 50) }}
                                ....
                            @else
                                {{$event->content}}
                            @endif
                        </p>
                        <br>
                        <a href="{{route('site.single.news.event', [$event->id])}}"><div class="btn btn-sm btn-primary">Read More</div></a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('events/'.$event->image)}}" alt="" width="200" style="min-height:250px;" class="img-fluid">
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

    @endsection