@extends('layouts.site-layout')


@section('content')

    <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/contactus.png')}}); background-size: cover;">

        <h2 class="display">Contact Us Anytime</h2>
        <p class=" my-3">We are at your service 24/7.
        </p>

    </div>


    <!--content ends-->

    <div class="social-box">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fas fa-map-marker-alt fa-3x"></i>

                        <div class="box-title">
                            <br>
                            <h4>Location</h4>
                        </div>
                        @foreach($company_details as $detail)
                        <div class="box-text">
                            <span>{{$detail->office_location}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <i class="fas fa-user-clock fa-3x"></i>

                        <div class="box-title">
                            <br>
                            <h4>Working Hours</h4>
                        </div>
                        <div class="box-text">
                            <span>24 Hours</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 text-center">
                    <div class="box">
                        <p>
                            <span><a href="https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490" target="blank"><i class="fab fa-facebook" style="font-size:25px;"></i></a>&nbsp;</span>
                            <span><a href="https://www.instagram.com/?hl=en" target="blank"><i class="fab fa-instagram" style="font-size:25px;"></i></a>&nbsp;</span>
                            <span><a href="https://twitter.com/?lang=en" target="blank"><i class="fab fa-twitter-square" style="font-size:25px;"></i></a>&nbsp;</span>
                            <span><a href="https://www.linkedin.com/" target="blank"><i class="fab fa-linkedin" style="font-size:25px;"></i></a></span>
                        </p>

                        <div class="box-title">
                            <br>
                            <h4>Follow Us</h4>
                        </div>
                        <div class="box-text">
                            <span>Follow Us For Latest Updates</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="jumbotron text-center my-4 ">
        <div class="container">
            <h3 class="jumbotron-heading">Contact Us</h3>
            <p class="">You can contact us by visiting directly to us also you can contact us by leaving us a message of appreciation</p>
            <p>
            </p>
        </div>
    </section>


    <!--contact-->
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="formsty" class="border">
                    <form action="mailto:paschimanchalsolution@gmail.com" method="post" enctype="text/plain" >
                        <div class="form-group">
                            <label for="exampleInputname">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputquery"> Queries</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="height:150px;">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798345.9818254344!2d82.82308121940493!3d28.31666087666844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995944f5626044b%3A0xc44f528365b29cc8!2sPaschimanchal%20Solution%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1599754536632!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </div>
    </Br></div>

    <hr class="featurette-divider my-4">
    <div class="container">
        <div class="row mb-2">

            @foreach($company_details as $detail)
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" >
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Head Office</strong>
                        <p class="card-text mb-auto">
                            {{$detail->office_location}}
                            <br><br>
                        </p>
                        <strong class="d-inline-block mb-2 text-primary">Contact Detail</strong>
                        <p><i class="fas fa-phone-volume"></i><span>&NonBreakingSpace; {{$detail->mobile}} </span></p>
                        <p><i class="fas fa-fax"></i><span>&NonBreakingSpace; {{$detail->landline}}</span></p>
                        <p><a href=""><i class="fas fa-envelope"></i></i><span>&NonBreakingSpace; {{$detail->mail}}</span></a></p>
                        <p><a href=""><i class="fab fa-google"></i></i><span>&NonBreakingSpace; {{$detail->gmail}}</span></a></p>
                        <p><a href="http://www.paschimanchl.net/"><i class="fab fa-internet-explorer"></i></i><span>&NonBreakingSpace; {{$detail->domain}}</span></a></p>

                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                        Team Location
                        <span class="">No Of Staffs</span>
                    </li>
                    @foreach($work_place as $place)
                    <li class="list-group-item d-flex justify-content-between align-items-center border-bottom-0">
                        {{$place->location}}
                        <span class="badge badge-primary badge-pill">{{$place->staffcount}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
    @endsection