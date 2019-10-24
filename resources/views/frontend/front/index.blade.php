@extends('layouts.frontend')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($data['sliders'] as $index => $slider)
        <li data-target="#carousel-example-generic" data-slide-to="{{$index}}"  @if($index == 0) class="active" @endif   ></li>
        @endforeach

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($data['sliders'] as $index => $slider)

            <div class="item @if($index == 0) active @endif">
                <a class="example-image-link" data-lightbox="example-set" href="{{asset('images/slider/' . $slider->image)}}" data-title="{{$slider->title}}">
                <img src='{{asset('images/slider/' . $slider->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" />
                <figcaption>
                    <p>{{$slider->title}}</p>
                </figcaption>
                </a>
                {{--<div class="carousel-caption">--}}
                {{--...--}}
                {{--</div>--}}
            </div>

        @endforeach

        {{--<div class="item">--}}
        {{--<img src="{{asset('frontend/images/2.jpg')}}" alt="...">--}}
        {{--<div class="carousel-caption">--}}
        {{--...--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="item">--}}
        {{--<img src="{{asset('frontend/images/1.jpg')}}" alt="...">--}}
        {{--<div class="carousel-caption">--}}
        {{--...--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--...--}}
    </div>
    <script src="{{asset('frontend/js/lightbox-plus-jquery.min.js')}}"> </script>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


{{--!-- ser_agile -->--}}
<div class="ser_agile">
    <div class="container">
        <h2 class="heading-agileinfo">Welcome<span>Events is a professionally managed Event</span></h2>
        <p>Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.</p>
        <div class="ser_w3l">
            @foreach($data['categories'] as $category)
            <div class="outer-wrapper">
                <div class="inner-wrapper" >
                    <div class="icon-wrapper">
                        <img src='{{asset('images/category/' . $category->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="category-icon1" />
                    </div>
                    <div class="content-wrapper">
                        <h4><a href="{{route('frontend.category',$category->id)}}" >{{$category->name}}</a></h4>
                        <p>{{$category->meta_description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //ser_agile -->
<!-- Stats -->
<div class="stats-agileits">
    <div class="container">
        <h3 class="heading-agileinfo white-w3ls">We Have Something To Be Proud Of<span class="black-w3ls">Events is a professionally managed Event</span></h3>
    </div>
    <div class="stats-info agileits w3layouts">
        <div class="container">
            <div class="col-md-4 col-sm-4agileits w3layouts stats-grid stats-grid-1">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='2500' data-delay='3' data-increment="2">2500</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">Happy Clients</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">
                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                <div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1000' data-delay='3' data-increment="2">1000</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">Events</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 stats-grid agileits w3layouts stats-grid-3">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='3421' data-delay='3' data-increment="2">3421</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">Services</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //Stats -->

<!-- showcase_w3layouts -->
<div class="showcase_w3layouts">
    <div class="container">
        <h3 class="heading-agileinfo">Services<span>Events is a professionally managed Event</span></h3>
        <div class="our_agile-info">
            @foreach($data['services'] as $service)
            <div class="showcase">
                <img src='{{asset('images/service/' . $service->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="service-image1" />

                {{--<div class="thumbnail thumbnail--awesome">--}}
                    {{--<div class="thumbnail__overlay">--}}

                    {{--</div>--}}
                {{--</div>--}}
                <div class="desc">

                    <h4>{{$service->name}}</h4>
                    <p>{{$service->description}}</p>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
         <button><a class="hvr-sweep-to-right" href="{{route('frontend.service',$service->id)}}">View all services</a></button>
    </div>
</div>
<!-- //showcase_w3layouts -->
{{--<section class="about_agile">--}}
    {{--<div class="container">--}}
        {{--<h3 class="heading-agileinfo white-w3ls">Event Booking<span class="black-w3ls">Events is a professionally managed Event</span></h3>--}}
        {{--<div class="about-grids">--}}

            {{--<div class="abt-rt-grid">--}}
                {{--<div class="w3ls-grid-head text-center">--}}
                    {{--<h3>online event booking </h3>--}}
                {{--</div>--}}
                {{--<div class="abt-form text-center">--}}
                    {{--@include('includes.flash')--}}
                    {{--@include('includes.error')--}}
                    {{--<form action="{{route('booking.store')}}" method="post">--}}
                        {{--@csrf--}}

                        {{--<div class="col-sm-4 col-xs-4 w3ls-lt-form">--}}
                            {{--<div class="w3ls-pr">--}}
                                {{--<div class="w3ls-pr">--}}
                                    {{--<input type="text" name="location" placeholder="Location" required="required">--}}
                                {{--</div>--}}
                                {{--<input type="text" name="name" placeholder="Name" required="required">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-4 col-xs-4 w3ls-lt-form">--}}
                            {{--<div class="w3ls-pr">--}}
                                {{--<input type="date" name="date" required="required">--}}
                                {{--<input type="tel" name="phone" placeholder="Phone no" required="required">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-4 col-xs-4 w3ls-lt-form">--}}
                            {{--<div class="w3ls-pr">--}}
                                {{--<input type="time" name="time" required="required">--}}
                                {{--<input type="email" name="email" placeholder="Email" required="required">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                        {{--<input type="submit" value="Book Now">--}}

                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!--testimonials-->
<div class="testimonials">
    <div class="container">
        <h3 class="heading-agileinfo">Event Manager Says<span>Events is a professionally managed Event</span></h3>
        <div class="flex-slider">
            <ul id="flexiselDemo1">
                @foreach($data['testimonials'] as $testimonial)
                <li>
                    <div class="laptop">
                        <div class="col-md-8 team-right">
                            <p>{{$testimonial->description}}</p>
                            <div class="name-w3ls">
                                <h5>{{$testimonial->name}}</h5>
                                <span>{{$testimonial->designation}}</span>
                            </div>
                        </div>
                        <div class="col-md-4 team-left">
                            <img src='{{asset('images/testimonial/' . $testimonial->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="testimonial-image1" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
               @endforeach
            </ul>

        </div>

    </div>
</div>

@endsection