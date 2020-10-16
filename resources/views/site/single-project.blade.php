@extends('layouts.site-layout')

@section('content')
    <div class="portfoliopage">
        <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/portfolio.jpg')}}); background-size: cover;">

            <h2 class="display">Portfolio</h2>
            <p class=" my-3">We believe that fundamental honesty is the
                keystone of any successful business.
            </p>

        </div>
        <br><br><br>
        <!--Details start Here-->
        <div class="row">
            <div class="col-lg-12"> <h4 style="text-align: center;">{{$project->project_name}}</h4></div>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card" >
                    <img src="{{asset('projects/'.$project->image)}}" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td colspan="2">Project Name</td>
                                <td colspan="2">{{$project->project_name}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Client</td>
                                <td colspan="2">{{$project->client}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Area</td>
                                <td colspan="2">{{$project->area}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Year</td>
                                <td colspan="2">{{\Carbon\Carbon::parse($project->year)->format('M Y')}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Contract Name</td>
                                <td colspan="2">{{$project->contract_name}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Customer</td>
                                <td colspan="2">{{$project->customer}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Description</td>
                                <td colspan="2">{{$project->description}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Quantity(Km)</td>
                                <td colspan="2">{{$project->quantity}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!--Details start Here-->
    @endsection