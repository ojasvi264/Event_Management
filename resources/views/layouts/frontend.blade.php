<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events a Wedding Category Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('frontend/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">		<!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/lightbox.css')}}">
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="{{asset('frontend/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- //web-fonts -->
    {{--@yield('css')--}}
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="header-w3layouts">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <h1><a class="navbar-brand" href="{{route('frontend.event')}}">Events</a></h1>
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Events</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{--<h1><a class="navbar-brand" href="{{route('frontend.event')}}">Events</a></h1>--}}
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        {{--<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>--}}
                        <li class="{!! \Illuminate\Support\Facades\Request::is('/') ? 'active' : '' !!}"><a class="hvr-sweep-to-right" href="{{route('frontend.index')}}">Home</a></li>
                        <li class="{!! \Illuminate\Support\Facades\Request::is('event') ? 'active' : '' !!} {!! \Illuminate\Support\Facades\Request::is('category/*') ? 'active' : '' !!} {!! \Illuminate\Support\Facades\Request::is('event_detail/*') ? 'active' : '' !!}"><a class="hvr-sweep-to-right" href="{{route('frontend.event')}}">Events</a></li>
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle hvr-sweep-to-right" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a class="hvr-sweep-to-right" href="icons.html">Icons</a></li>--}}
                                {{--<li><a class="hvr-sweep-to-right" href="typography.html">Short Codes</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li class="{!! \Illuminate\Support\Facades\Request::is('gallery') ? 'active' : '' !!}"><a class="hvr-sweep-to-right" href="{{route('frontend.gallery')}}">Gallery</a></li>
                        <li class="{!! \Illuminate\Support\Facades\Request::is('past_event') ? 'active' : '' !!}"><a class="hvr-sweep-to-right" href="{{route('frontend.past_event')}}">Past Events</a></li>
                        <li class="{!! \Illuminate\Support\Facades\Request::is('upcomming_event') ? 'active' : '' !!}"><a class="hvr-sweep-to-right" href="{{route('frontend.upcomming_event')}}">Upcomming Events</a></li>
                        <li class="{!! \Illuminate\Support\Facades\Request::is('about') ? 'active' : '' !!}" ><a class="hvr-sweep-to-right" href="{{route('frontend.about')}}">About</a></li>

                        <li class="{!! \Illuminate\Support\Facades\Request::is('contact') ? 'active' : '' !!}"><a class="hvr-sweep-to-right" href="{{route('frontend.contact')}}">Contact</a></li>
                        <form action="{{route('frontend.search')}}" method="get" class="sidebar-form">
                            @csrf
                            <div class="input-group">
                                <input type="search" name="search" class="form-control" placeholder="Search events....">
                                <span class="input-group-btn">
                                    <button type="submit" name="" id="" class="form-control"><i class="fa fa-search"></i></button>
                                  </span>
                            </div>
                        </form>
                        {{--@if(isset($events))--}}
                            {{--<p>The search results for your query <b>{{$query}}</b>are :</p>--}}
                            {{--<h1>Sample Event Details:</h1>--}}
                            {{--<table class="table table-stripped">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th>SN</th>--}}
                                    {{--<th>Name</th>--}}
                                    {{--<th>Title</th>--}}
                                    {{--<th>Action</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--@php($i=1)--}}
                                {{--@foreach($data['events'] as $event)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{$i++}}</td>--}}
                                        {{--<td>{{$data['event']->name}}</td>--}}
                                        {{--<td>{{$data['event']->title}}</td>--}}
                                        {{--<td>--}}
                                            {{--<a href="{{route('event.show',$event->id)}}" class="btn btn-info">--}}
                                                {{--<i class="fa fa-eye"></i>--}}
                                                {{--View--}}
                                            {{--</a>--}}
                                            {{--<a href="{{route('event.edit',$event->id)}}" class="btn btn-warning">--}}
                                                {{--<i class="fa fa-pencil"></i>--}}
                                                {{--Edit--}}
                                            {{--</a>--}}
                                            {{--<form action="{{route('event.destroy',$event->id)}}" method="post"--}}
                                                  {{--onsubmit="return confirm('Are you sure?')">--}}
                                                {{--@csrf--}}
                                                {{--<input type="hidden" name="_method" value="DELETE"/>--}}
                                                {{--<button class="btn-danger"><i class="fa fa-trash"></i>Delete</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--@endforeach--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                            {{--@endif--}}
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

    </div>
    {{--</div>--}}



    <div class="content">
        @yield('content')
    </div>





{{--</div>--}}

<!-- //header -->

<
<!--//testimonials-->

<!-- footer-top -->
<div class="footer-top">
    <div class="container">
        <div class="col-md-3 foot-left">
            <h3>About Us</h3>
            <p>{{$data['about'][0]->description}}</p>
        </div>
        <div class="col-md-3 foot-left">
            <h3>GET IN TOUCH</h3>
            <p>L{{$data['configurations']->website}}</p>

            <div class="contact-btm">
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <p>{{$data['configurations']->address}}</p>
            </div>
            <div class="contact-btm">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <p>{{$data['configurations']->phone}}</p>
                <div class="contact-btm">
                </div>
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                <p><a href="mailto:example@email.com">{{$data['configurations']->email}}</a></p>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="col-md-3 foot-left">
            <h3>Latest Events</h3>
            <ul>
                @foreach($data['latest_events'] as $latest_event)
                    {{--@php($image = $latest_event->images->first())--}}
                <li><a class="example-image-link" href="{{asset('images/event/' . $latest_event->image)}}" data-lightbox="example-set"  data-title="{{$latest_event->title}}">
                        <img src='{{asset('images/event/' . $latest_event->image)}}'  alt="event-image1"  class="img-responsive" />
                    </a></li>
                    @endforeach
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="col-md-3 foot-left">
            <h3>Subscribe</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has </p>
            <form action="#" method="post">
                <input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="clearfix"></div>
        <li><a class="hvr-sweep-to-right" href="{{route('frontend.faq')}}">FAQ</a></li>
        <li><a class="hvr-sweep-to-right" href="{{route('frontend.terms')}}">Terms and Conditions</a></li>
    </div>
</div>
<!-- /footer-top -->

<!-- footer -->
<div class="copy-right">
    <div class="container">
        <div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
            <div class="copy-left">
                <p>&copy; {{date('Y')}} Events. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 top-middle">
            <ul>
                <li><a href="{{$data['configurations']->fb_link}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{$data['configurations']->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{$data['configurations']->google_link}}"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="{{$data['configurations']->vimeo_link}}"><i class="fa fa-vimeo"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>

    </div>
</div>


<!-- //bootstrap-modal-pop-up -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{asset('frontend/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 2000
        })
    })
</script>

<script type="text/javascript">
    var dthen1 = new Date("12/25/17 11:59:00 PM");
    start = "05/03/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = "countbox_1";
    CountBack_slider(gsecs1, "countbox_1", 1);

    var dthen1 = new Date("12/12/17 11:59:00 PM");
    start = "01/20/16 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = "countbox_2";
    CountBack_slider(gsecs1, "countbox_2", 1);
</script>

<!-- //here ends scrolling icon -->

<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager:true,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager:false,
            nav:true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>

<!-- start-smoth-scrolling -->
<!-- OnScroll-Number-Increase-JavaScript -->
<script type="text/javascript" src="{{asset('frontend/js/numscroller-1.0.js')}}"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--flexiselDemo1 -->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 2,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint:991,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.flexisel.js')}}"></script>
<!--//flexiselDemo1 -->

<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

</body>
</html>