@extends('layouts.frontend')
@section('content')
    <div class="about">
        <div class="container">
            <h2 class="heading-agileinfo">About Us<span>{{$data['content'][0]->title}}</span></h2>
            <div class="about-grids-1">
                <div class="col-md-5 wthree-about-left">
                    <div class="wthree-about-left-info">
                        <img src='{{asset('images/page/' . $data['content'][0]->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="aboutus-image1" />
                    </div>
                </div>
                <div class="col-md-7 agileits-about-right">
                    <h5>{{$data['content'][0]->short_description}}</h5>
                    <p>
                        {{$data['content'][0]->description}}
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- offers -->
    <div class="offers">
        <div class="container">

            <h3 class="heading-agileinfo white-w3ls">Our Offers<span class="black-w3ls">Events is a professionally managed Event</span></h3>
            <div class="offers-grids">
                <div class="col-md-6 wthree-offers-left">
                    <div class="offers-left-heading">
                        <h4>Quisque eu ullamcorper dui. Nullam commodo ornare ipsum.</h4>
                    </div>
                    <div class="offers-left-grids">
                        <div class="offers-number">
                            <p>1</p>
                        </div>
                        <div class="offers-text">
                            <p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat. Integer consequat aliquet facilisis. Phasellus ut venenatis nisi, et lobortis sem.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="offers-left-grids offers-left-middle">
                        <div class="offers-number">
                            <p>2</p>
                        </div>
                        <div class="offers-text">
                            <p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat. Integer consequat aliquet facilisis.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="offers-left-grids">
                        <div class="offers-number">
                            <p>3</p>
                        </div>
                        <div class="offers-text">
                            <p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus. Mauris eu erat vitae enim congue placerat.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 wthree-offers-right">
                    <h5>Cras consequat et velit quis molestie. Etiam bibendum laoreet enim, nec malesuada ex fermentum et. Donec molestie diam nec lorem accumsan bibendum.</h5>
                    <p>Vivamus est sem, pellentesque vel libero sit amet, varius tempor orci. Integer egestas metus vitae ultrices tristique. Fusce lectus dui, venenatis vitae justo nec, aliquet feugiat nunc. </p>
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus sem leo, interdum quis risus</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Nullam egestas nisi id malesuada aliquet </a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Donec condimentum purus urna venenatis</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Cum sociis natoque penatibus et magnis</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Suspendisse nec magna id ex pretium</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- offers -->
    <!-- about-team -->
    <div class="team">
        <div class="container">
            <h3 class="heading-agileinfo">Our Team<span>Events is a professionally managed Event</span></h3>
            <div class="team-row-agileinfo">
                @foreach($data['teams'] as $team)
                <div class="col-md-3 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src='{{asset('images/team/' . $team->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="event-image1" />
                        <div class="w3agile-caption ">
                            <h4>{{$team->name}}</h4>
                            <p>{{$team->designation}}</p>
                            <div class="social-icon social-w3lsicon">
                                <a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about-team -->
    <!-- about -->

@endsection