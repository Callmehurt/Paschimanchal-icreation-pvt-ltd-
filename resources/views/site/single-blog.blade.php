@extends('layouts.site-layout')

@section('content')
    <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/case.jpg')}}); background-size: cover;">

        <h2 class="display">Blogs</h2>
        <p class=" my-3">Know us from what we have to say.
        </p>

    </div>
    <br><br><br>
    <!--Details start Here-->
    <div class="row">
        <div class="col-lg-12"> <h4 style="text-align: center;">{{$blog->title}}</h4></div>
        <hr>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card" >
                <img src="{{asset('images/'.$blog->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">{{$blog->title}}</h5>
                    <hr>
                    <p class="text-justify">
                        {{$blog->content}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!--Details start Here-->
    <br><br>

    @endsection