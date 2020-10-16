@extends('layouts.site-layout')

@section('content')

    <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/services.jpg')}}); background-size: cover;">

        <h2 class="display">Services</h2>
        <p class=" my-3">We Provide The Best Of Services With Our Dedicated Team.
        </p>

    </div>
    <br><br><br>
    <!--Details start Here-->
    <div class="row">
        <div class="col-lg-12"> <h4 style="text-align: center;">{{$service->title}}</h4></div>
        <hr>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card" >
                <img src="{{asset('services/'.$service->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">{{$service->title}}</h5>
                    <hr>

                    <p class="text-justify">{{$service->description}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <!--Details start Here-->
    <br><br>

    <!-- Card -->
    <h3 style="text-align: center;">Service <span style="color:darkcyan">Timeline</span></h3>
    <hr>
    <div class="card card-image"></div>

    <!-- Content -->
    <div class="rgba-black-strong py-5 px-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8">

                <!--Accordion wrapper-->
                <div class="accordion md-accordion accordion-5" id="accordionEx5" role="tablist"
                     aria-multiselectable="true">



                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading31">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse30" aria-expanded="true"
                               aria-controls="collapse30">
                                <h6 class="text-uppercase white-text mb-0 py-3 mt-1" style="text-align:center;">
                                    Designing
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse30" class="collapse show" role="tabpanel" aria-labelledby="heading31"
                             data-parent="#accordionEx5">
                            <div class="card-body rgba-black-light white-text z-depth-1">
                                <p class="p-md-4 mb-0">{{$service->designing}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <h5 style="text-align: center; color: #34495E"><i class="fas fa-angle-double-down"></i></h5>

                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading31">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse31" aria-expanded="true"
                               aria-controls="collapse31">
                                <h6 class="text-uppercase white-text mb-0 py-3 mt-1" style="text-align:center;">
                                    Deployment
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="heading31"
                             data-parent="#accordionEx5">
                            <div class="card-body rgba-black-light white-text z-depth-1">
                                <p class="p-md-4 mb-0">{{$service->deployment}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <h5 style="text-align: center; color: #34495E"><i class="fas fa-angle-double-down"></i></h5>
                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse32" aria-expanded="true"
                               aria-controls="collapse32">
                                <h6 class="text-uppercase white-text mb-0 py-3 mt-1" style="text-align:center;">
                                    Testing
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="heading32"
                             data-parent="#accordionEx5">
                            <div class="card-body rgba-black-light white-text z-depth-1">
                                <p class="p-md-4 mb-0">{{$service->testing}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <h5 style="text-align: center; color: #34495E"><i class="fas fa-angle-double-down"></i></h5>
                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse33" aria-expanded="true"
                               aria-controls="collapse33">

                                <h6 class="text-uppercase white-text mb-0 py-3 mt-1" style="text-align:center;">
                                    Support
                                </h6>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse33" class="collapse" role="tabpanel" aria-labelledby="heading32"
                             data-parent="#accordionEx5">
                            <div class="card-body rgba-black-light white-text z-depth-1">
                                <p class="p-md-4 mb-0">{{$service->support}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                </div>
                <!--/.Accordion wrapper-->

            </div>
        </div>
    </div>
    <!-- Content -->
    </div>
    <!-- Card -->

@endsection