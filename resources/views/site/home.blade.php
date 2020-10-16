@extends('layouts.site-layout')

@section('content')
    <!--Carousel-->

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade body" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/caro1.jpg')}}" class="d-block w-100 min-vh-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="cc" id="cc">
                        <h3>“ YOUR BRIDGE TO THE WORLD”</h3>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/caro2.jpg')}}" class="d-block w-100 min-vh-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <div class="cc" id="cc">
                        <h3>FIBER OPTICS & CABLE TV</h3>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/caro3.jpg')}}" class="d-block w-100 min-vh-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <h3>COMMUNICATION</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/about.jpg')}}" class="d-block w-100 min-vh-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <h3>Test</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--CAROUSEL ENDS---->


    <section class="text-center">
        <div class="container">
            <h3 style="color:#34495E;text-align: center;">About <span style="color:darkcyan;">Us</span></h3>
            <hr>
            <br><br>
            <p class="">Paschimanchal Solution Pvt. Ltd. was incorporated in 2010
                and in the relatively short period of time since its inception,
                it has established as a major Optical fiber networking and
                engineering services in Nepal with a substantial amount of
                business generated from the wire line.</p>
            <p class=""> It has established a good
                working relationship with the key telecom and network players
                such as NTC, Ncell, China Comservice (C.C.S) Nepal Pvt. Ltd,
                United Telecom (UTL) and different ISP and Cable TV Networks,
                private/government entities and emerging new industry players</p>
            <p>
                <a href="{{route('site.about.us')}}" class="btn btn-primary my-2">More About Us</a>
                <a href="{{route('site.contact')}}" class="btn btn-secondary my-2">Reach Out To Us</a>
            </p>
        </div>
    </section>

    <section class="our-blog p-0 m-0 bg-silver">
        <section class="jumbotron text-center my-4">
            <div class="container">
                <a href="services.html"><h3 class="jumbotron-heading" style="color:#34495E;">How We Work</h3></a>
                <p class="">Network hardware
                    installation, optic fiber lease service, supply of spares and expansion equipment are the major
                    services provided to the ISPs</p>
                <p>
                </p>
            </div>
        </section>
        <div class="container work-process  pb-5 pt-5">
            <div class="title mb-5 text-center">
            </div>
            <!-- ============ step 1 =========== -->
            <div class="row">
                <div class="col-md-5">
                    <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step">
                                    <p class="m-0 p-0">Step</p>
                                    <h2 class="m-0 p-0">01</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Designing</h5>
                                <p><small>Before we implement our plans we design the reqired workflow for the given project. </small></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ step 2 =========== -->
            <div class="row">

                <div class="col-md-5">
                    <div class="process-point-left"></div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step">
                                    <p class="m-0 p-0">Step</p>
                                    <h2 class="m-0 p-0">02</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Deployment</h5>
                                <p><small>After designing the workflow we deploy it targetiing the success of our project. </small></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- ============ step 3 =========== -->
            <div class="row">
                <div class="col-md-5">
                    <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step">
                                    <p class="m-0 p-0">Step</p>
                                    <h2 class="m-0 p-0">03</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Testing</h5>
                                <p><small>Testing is the major component of our workflow we test our product before delivering it.</small></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-point-right"></div>
                </div>
            </div>
            <!-- ============ step 4 =========== -->
            <div class="row">
                <div class="col-md-5">
                    <div class="process-point-left"></div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="process-step">
                                    <p class="m-0 p-0">Step</p>
                                    <h2 class="m-0 p-0">04</h2>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h5>Support</h5>
                                <p><small>After the completion of project we support the enhancement of the peoject.</small></p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </section>
    <script>
        AOS.init();
    </script>
    <br><br>

    <section class="jumbotron text-center my-4 ">
        <div class="container">
            <a href="{{route('site.portfolio')}}"><h3 class="jumbotron-heading" style="color:#34495E;">Why Paschimanchal?</h3></a>
            <p class="">Paschimanchal Solution Pvt. Ltd. was established to
                be responsive to the emerging new technologies in the
                communication industry by constantly monitoring new
                telecommunication products and services.  </p>
            <p>
            </p>
        </div>
    </section>
    <!--pricing-->
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h5 class="my-0 font-weight-normal">800 km ADDS Installation</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">800+</h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <p> We have already connected 800 KM
                            ADDS cable in various parts of Nepal.
                            Amazingly, that’s quite a number.</p>

                    </ul>
                    <a href="{{route('site.contact')}}"><button type="button" class="btn btn-sm btn-block btn-outline-primary">Join With Us</button></a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h5 class="my-0 font-weight-normal">20+ Projects Completer</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">20+</h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <p>Our completed projects include
                            wide range of clients and everyday
                            expanding.</p>

                    </ul>
                    <a href="{{route('site.contact')}}"><button type="button" class="btn btn-sm btn-block btn-success">Contact Us Now</button></a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h5 class="my-0 font-weight-normal">70+ Manpower</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">70+</h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <p>We have skilled and very diveresed
                            manpower to undertake any given
                            project and we are determined to do the best.</p>

                    </ul>
                    <a href="{{route('site.contact')}}"><button type="button" class="btn btn-sm btn-block btn-outline-warning">Be A Part Of Us</button></a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h5 class="my-0 font-weight-normal">24/7 Service</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">24/7</h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <p> We are here at your services 24/7 .We are always open at your service anytime any day of the week .</p>

                    </ul>
                    <a href="{{route('site.contact')}}"><button type="button" class="btn btn-sm btn-block btn-danger">We Welcome You</button></a>
                </div>
            </div>

        </div>
    </div>
    <!--pricing ends-->



    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <a href="{{route('site.services')}}"><h3 class="jumbotron-heading " style="color:#34495E;">Our Services</h3></a>
                <p class="">Our company has been able to establish a good working relationship with major ISPs (Internet
                    Service Providers) and has been providing them various kinds of support. </p>
                <p>
                </p>
            </div>
        </section>
    </main>
    <!--overlay-->
    <div class="album py-5 bg-light">
        <div class="container coverlay">
            <div class="row">

                @foreach($services as $service)

                <div class="col-md-4">
                    <div class="content shadow-lg"> <a href="{{route('site.services')}}">
                            <div class="content-overlay"></div> <img class="content-image img-fluid" src="{{asset('services/'.$service->image)}}" style="height: 225px; width: 100%; display: block;">
                            <div class="content-details fadeIn-bottom">
                                <p class="content-text">
                                    @if(strlen($service->description) > 50)
                                        {{ substr($service->description, 0, 50) }}
                                        ....
                                    @else
                                        {{$service->description}}
                                    @endif
                                </p>
                            </div>
                        </a></div>
                    <hr class="featurette-divider">
                    <div class="overlay"><a href="{{route('site.services')}}"><h6>{{$service->title}}</h6></a></div>
                </div>

                @endforeach


            </div>
        </div>
        <!--overlay-->
    </div>
    </div>

    <h3 style="color:#34495E;text-align: center;">Our <span style="color:darkcyan;">Clients</span></h3>
    <hr>
    <br><br>
    <div class="container">
        <div class="owl-carousel owl-theme clientsimg">

            @foreach($clients as $client)
            <div >
                <img src="{{asset('clients/'.$client->image)}}" alt="" style="height:100px;width:150px;" class="img-fluid">
            </div>
            @endforeach
        </div>
    </div>
    <br><br>

    <section class="jumbotron text-center">
        <div class="container">
            <a href="{{route('site.portfolio')}}"><h3 class="jumbotron-heading " style="color:#34495E;">Undertaken And Completed Projects</h3></a>
            <p class="">Our company has taken many projects associating with the communication and network.We have successfully managed to complete them in time with happy cusotmers. </p>
            <p>
            </p>
        </div>
    </section>

    <div class="container">
        <div class="owl-carousel owl-theme port">

            @foreach($projects as $project)
            <div style="margin-bottom: 80px">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"></div>
                    <div class="serv-section-desc">
                        <a href="{{route('site.single.project', [$project->id])}}"> <h6 style="color:darkcyan">
                                @if(strlen($project->project_name) > 30)
                                    {{ substr($project->project_name, 0, 30) }}
                                    ....
                                @else
                                    {{$project->project_name}}
                                @endif
                             </h6></a>
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

    @endsection