@extends('layouts.site-layout')

@section('content')
    <div class="jumbotron  text-white " style="background-image: url({{asset('images/services.jpg')}}); background-size: cover;">

        <h2 class="display">Career</h2>
        <p class=" my-3" >Our mission is to be a role model technology company.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="text-align: match-parent">
                <div style="padding-bottom: 40px;padding-top: 10px;justify-content: center">
                <h2 style="font-weight: bolder;margin-top: 20px">{{$vacancy->title}}</h2>
                <h4 style="margin-top: 15px;color: #2ecc71;margin-bottom: 10px">Job Description</h4>
                {!! $vacancy->job_description !!}

                <h4 style="margin-top: 20px;color: #2ecc71;margin-bottom: 10px">Job Requirements</h4>
                {!! $vacancy->job_requirement !!}
                <a href="{{route('site.application.page', [$vacancy->id])}}" class="btn btn-success apply-btn" style="background-color: #2ecc71;">Apply for this job</a>
                </div>
            </div>
        </div>
    </div>

@endsection