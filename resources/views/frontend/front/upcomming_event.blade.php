@extends('layouts.frontend')
<!--Events -->
@section('content')
<div class="events-agileits-w3layouts">
    <div class="container">
        <h2 class="heading-agileinfo">Upcomming Events<span>Events is a professionally managed Event</span></h2>
        <div class="popular-grids">
            @foreach($data['upcomming_events'] as $event)
            <div class="col-md-4 popular-grid">
                <img src='{{asset('images/event/' . $event->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="event-image1" />
                <div class="popular-text">
                    <h5><a href="{{route('frontend.event_detail',$event->id)}}" >{{$event->name}}</a></h5>
                    <div class="detail-bottom">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$event->date}}</li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$event->location}}</li>
                        </ul>
                        <p>{{$event->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!-- //Events -->


@endsection

