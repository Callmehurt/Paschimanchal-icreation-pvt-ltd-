@extends('layouts.site-layout')

@section('content')
    <div class="portfoliopage">
        <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/portfolio.jpg')}}); background-size: cover;">

            <h2 class="display">Portfolio</h2>
            <p class=" my-3">We believe that fundamental honesty is the
                keystone of any successful business.
            </p>

        </div>



        <div class="col-xl-6 mx-auto text-center">
            <h3 style="color:#34495E;text-align: center;">Completed And <span style="color:darkcyan;">Undergoing</span> Projects</h3>
            <hr>
        </div>

        <div class="section-block-grey">
            <div class="container">

                <div class="row mt-60">

                    @foreach($projects as $project)
                    <div class="col-md-4 col-sm-12 col-12" id="portfolio1">
                        <div class="serv-section-2">
                            <div class="serv-section-2-icon"></div>
                            <div class="serv-section-desc">
                                <a href="{{route('site.single.project', [$project->id])}}"> <h6 style="color:darkcyan;">{{$project->project_name}}</h6></a>
                                <div class="section-heading-line-left"></div>
                                <p> Client - {{$project->client}}</p>
                                <p>Area - {{$project->area}}</p>
                                <p>Year - {{\Carbon\Carbon::parse($project->year)->format('M Y')}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>

    @endsection