@extends('layouts.site-layout')

@section('content')
    <div class="jumbotron  text-white " style="background-image: url({{asset('images/about-us.jpg')}}); background-size: cover;">

        <h2 class="display">About Us</h2>
        <p class=" my-3" >Leading Optical Fiber Networking And Engineering Services.
        </p>

    </div>


    <section class="text-center">
        <div class="container">
            <h3 style="color:#34495E;text-align: center;">About The <span style="color:darkcyan;">Company</span></h3>
            <hr>
            <br><br>
            <p class="text-muted">Paschimanchal Solution Pvt. Ltd. was incorporated in 2010
                and in the relatively short period of time since its inception,
                it has established as a major Optical fiber networking and
                engineering services in Nepal with a substantial amount of
                business generated from the wire line. It has established a good
                working relationship with the key telecom and network players
                such as NTC, Ncell, China Comservice (C.C.S) Nepal Pvt. Ltd,
                United Telecom (UTL) and different ISP and Cable TV Networks,
                private/government entities and emerging new industry players</p>
            <p class="text-muted"> In doing so, the company has also employed highly technical,
                well disciplined, foreign trained, and field tested and experienced
                manpower to handle all fiber telecommunication jobs with
                a professional’s touch.</p>
        </div>
    </section>

    <hr class="featurette-divider my-4">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="font-size: 15px;">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Mission/Vision</strong>
                        <h5 class="mb-0">Our Missions</h5>
                        <div class="mb-1 text-muted">The company is growing as the leading vender of
                            all the major telecom companies in Nepal. </div>
                        <p class=" mb-auto">
                        <ul>
                            <li>We have well equipped, well trained and
                                well qualified manpower. Our mission is to
                                become one of the top level vendor of telecom
                                companies in Nepal.</li>
                            <li>As we move towards our goal to become the
                                largest company in the field of fiber optics
                                installation, we are aiming to work in the
                                installation of OPGW, OFC type of fibers.</li>
                            <li>We are well equipped and well familiar in cable
                                installation, we are planning to work in electricity
                                transmission line sector as well.</li>
                        </ul>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style=" font-size: 15px;">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Business Plan</strong>
                        <h5 class="mb-0">Business Plan</h5>
                        <div class="mb-1 text-muted">To achieve the goals and to meet the vision of
                            the company, our business plan are as follows:</div>
                        <p class="mb-auto">
                        <ul>
                            <li>We have service center located in different
                                parts of Nepal: Itharahi, Birgunj, Naryanghat,
                                Butwal, Pokhra, Nepalgunj and Kathmandu.</li>
                            <li>We also have suitable and well managed
                                offices, capable manpower & equipped
                                machines to work this type of function.</li>
                            <li>On the basis of our enough and qualified
                                manpower, managed service center, we
                                are ready to work in multiple projects
                                simultaneously.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <section class="jumbotron text-center my-4">
        <div class="container">
            <h3 class="jumbotron-heading">Our Team</h3>
            <p class="">We have a qualified and well
                trained team to accomplish the
                project on right time frame and
                deadline.We are in constant support for
                ADDS, Fiber, ISP & Cable TV so
                as to maintain the uplink time
                maintining great reliability. </p>
            <p>
            </p>
        </div>
    </section>

    <!--team carousel-->
    <!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <div class="row">

                @foreach($team as $member)
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="{{asset('team/'.$member->image)}}" alt="card image"></p>
                                        <h5 class="card-title">{{$member->designation}}</h5>
                                        <p class="card-text">{{$member->fullname}}</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h5 class="card-title">{{$member->designation}}</h5>
                                        <p class="card-text">{{$member->intro}}</p>
                                        <h5><i class="fas fa-phone" style="color:green;"></i><span>  {{$member->contact}}</span></h5>
                                        <p> <a href="{{$member->link}}" target="blank"><i class="fab fa-facebook" style="font-size:30px;"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                    @endforeach

            </div>
        </div>
    </section>
    <!-- Team -->
    @endsection