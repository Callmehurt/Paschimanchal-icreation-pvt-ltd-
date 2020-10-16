<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="The leading fiber optics and communication solutions">
    <title>PASCHIMANCHAL PVT.LTD</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



    <link rel="stylesheet" href="{{asset('owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlcarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend-style.css')}}">
</head>
<body>

<!--naivigation-->
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-custom">

    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>

    <div class="collapse navbar-collapse flex-column" id="navbarNavDropdown">

        <div class="header mr-auto">
            <p class="d-md-none d-none d-lg-block ">
                <br>
                @foreach($company_details as $detail)
                <span class="spanhead"></span> <i class="fas fa-phone-volume" style="color:darkcyan;"></i><span>&nbsp;&nbsp;<span style="color:#cc521d;">{{$detail->landline}} &nbsp;&nbsp;&nbsp;&nbsp; </span >
                <span><i class="fas fa-map-marker-alt" style="color:darkcyan;"></i><span>&nbsp;&nbsp;<span style="color:#cc521d;">{{$detail->office_location}}</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                 @endforeach
                <span><a href="https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490" target="blank"><i class="fab fa-facebook" style="font-size:25px;color:#7dbbfa;"></i></a>&nbsp;</span>
                <span><a href="https://www.instagram.com/?hl=en" target="blank"><i class="fab fa-instagram" style="font-size:25px;color:maroon;"></i></a>&nbsp;</span>
                <span><a href="https://twitter.com/?lang=en" target="blank"><i class="fab fa-twitter-square" style="font-size:25px;color:blue;"></i></a>&nbsp;</span>
                <span><a href="https://www.linkedin.com/" target="blank"><i class="fab fa-linkedin" style="font-size:25px;color:darkblue;"></i></a></span>
                <hr style="width:150%;">
            </p>
        </div>

        <ul class="navbar-nav mr-auto ">
            <li class="nav-item ">
                <div style="width:100px;"></div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item ">
                <div style="width:20px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('site.about.us')}}">About Us</a>
            </li>
            <li class="nav-item ">
                <div style="width:20px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('site.portfolio')}}">Portfolio</a>
            </li>
            <li class="nav-item ">
                <div style="width:20px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('site.services')}}">Services</a>
            </li>
            <li class="nav-item ">
                <div style="width:20px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('site.news.event')}}">News & Events</a>
            </li>
            <li class="nav-item ">
                <div style="width:20px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('site.blogs')}}">Case Study</a>
            </li>
            <li class="nav-item ">
                <div style="width:20px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('site.contact')}}">Contact Us</a>
            </li>
            <li class="nav-item ">
                <div style="width:20px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('site.career')}}">Career</a>
            </li>
        </ul>
    </div>


    <br><br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-home" aria-hidden="true"></i>
    </button>
</nav>
<!--Navigation ends-->


@yield('content')

<!--Footer Starts Here-->
<footer id="dk-footer" class="dk-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="footer-left-widget">
                    <a href="{{route('home')}}" class="footer-logo">
                        <img src="{{asset('images/logo.png')}}" alt="footer_logo" class="img-fluid">
                    </a>
                    <br><br>
                    @foreach($company_details as $detail)
                    <div class="contactfooter">
                        <p style="color:#878787;">{{$detail->office_location}}</p>
                        <a href=""><p style="color: #878787;"><i class="fas fa-phone-volume"></i> &NonBreakingSpace;<span> {{$detail->landline}}<span> &NonBreakingSpace;<i class="fas fa-envelope"></i> &NonBreakingSpace;<span> {{$detail->mail}}</span></p></a>
                    </div>
                    @endforeach



                    <br>
                    <div class="footer-social-link">

                        <ul>
                            <li>
                                <a href="https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490" target="blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/?hl=en" target="blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=en" target="blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/" target="blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- End Social link -->
                </div>
                <!-- End Footer info -->

            </div>
            <!-- End Col -->
            <div class="col-md-12 col-lg-7">

                <!-- End Contact Row -->
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="footer-widget footer-left-widget footerlinks">
                            <div class="section-heading">
                                <h4>Quick Links</h4>
                                <span class="animate-border border-black"></span>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('site.about.us')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('site.portfolio')}}">Portfolio</a>
                                </li>
                                <li>
                                    <a href="{{route('site.services')}}">Services</a>
                                </li>

                                <li>
                                    <a href="{{route('site.news.event')}}">News & Events</a>
                                </li>
                                <li>
                                    <a href="{{route('site.blogs')}}">Case Study</a>
                                </li>
                                <li>
                                    <a href="{{route('site.contact')}}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{route('site.career')}}">Career</a>
                                    <br><br>
                                </li>
                            </ul>

                        </div>
                        <!-- End Footer Widget -->
                    </div>

                    <!-- End col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget footer-left-widget news">
                            <div class="section-heading">
                                <a href="{{route('site.news.event')}}"><h4>News</h4></a>

                            </div>
                            @foreach($news as $n)
                            <p><a href="{{route('site.single.news.event', [$n->id])}}" class="footernews">{{$n->title}}</a></p>
                            @endforeach
{{--                            <p><a href="news/newsdetail2.html" class="footernews">Our ADDS Installation Service</a></p>--}}
{{--                            <p><a href="news/newsdetail3.html" class="footernews">We Build Relationship</a></p>--}}
{{--                            <p><a href="news/newsdetail4.html" class="footernews">Fast Growing Fiber Services</a></p>--}}

                        </div>
                        <!-- End footer widget -->
                    </div>
                    <!-- End Col -->

                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->
</footer>
<!--footer Ends here-->


<script type="text/javascript" src="{{asset('bootstrap/js/jquery.js')}}"></script>

<script type="text/javascript" src="{{asset('owlcarousel/docs/assets/owlcarousel/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:80,
        nav:true,
        autoWidth:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:80,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
    $(document)
        .ready(function(){
            owl.trigger('play.owl.autoplay',[3000])
        })


</script>
</body>
</html>