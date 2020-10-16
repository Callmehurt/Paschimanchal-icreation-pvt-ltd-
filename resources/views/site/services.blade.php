@extends('layouts.site-layout')

@section('content')
    <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/services.jpg')}}); background-size: cover;">

        <h2 class="display">Services</h2>
        <p class=" my-3">We Provide The Best Of Services With Our Dedicated Team.
        </p>

    </div>


    <h3 style="color:#34495E;text-align: center;">Our<span style="color:darkcyan;"> Services</span></h3>
    <hr>
    <br><br>
    <div class="container cards" >

        <div class="row">

            @foreach($services as $service)

            <div class="col-lg-4" id="servicedetail1">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('services/'.$service->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            @if(strlen($service->title) > 30)
                                {{ substr($service->title, 0, 30) }}
                                ....
                            @else
                                {{$service->title}}
                            @endif
                        </h5>
                        <p class="card-text">
                            @if(strlen($service->description) > 50)
                                {{ substr($service->description, 0, 50) }}
                                ....
                            @else
                                {{$service->description}}
                            @endif
                        </p>
                        <a href="{{route('site.single.service', [$service->id])}}" class="btn btn-md btn-primary">Read More</a>
                    </div>
                </div>
                <br><br>
            </div>

            @endforeach

        </div>
    </div>
    <br><br>
    @endsection