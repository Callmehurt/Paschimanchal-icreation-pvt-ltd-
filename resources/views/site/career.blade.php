@extends('layouts.site-layout')

@section('content')
    <div class="jumbotron  text-white " style="background-image: url({{asset('images/services.jpg')}}); background-size: cover;">

        <h2 class="display">Career</h2>
        <p class=" my-3" >Our mission is to be a role model technology company.
        </p>
    </div>

   <div class="container">
       <div class="row justify-content-center">

           <h1>Current Opening</h1>

           @foreach($jobs as $job)
           <div class="col-lg-12">
               <div class="career-wrapper shadow-sm" style="margin-bottom: 2rem">
                   <h6>{{$job->title}}</h6>
                   <span style="color: greenyellow">{{$job->location}}</span>
                   <a href="{{route('site.single.career',[$job->id])}}" style="color: #2ecc71;">View Job<i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
               </div>
           </div>
           @endforeach

       </div>
   </div>

    @endsection