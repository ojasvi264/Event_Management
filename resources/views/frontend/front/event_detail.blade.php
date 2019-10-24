@extends('layouts.frontend')
@section('content')
<!-- about -->
<div class="about">

    <div class="container">

        <h2 class="heading-agileinfo">{{$data['event']->name}}</h2>
        <div class="about-grids-1">
            <div class="col-md-5 wthree-about-left">
                <div class="wthree-about-left-info">
                    <img src='{{asset('images/event/' . $data['event']->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="event-image1" />
                </div>
            </div>
            <div class="col-md-7 agileits-about-right">
                <h5>{{$data['event']->title}}</h5>
                <p>{{$data['event']->short_description}}
                    <span>{{$data['event']->description}}</span>
                </p>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>

</div>
<div class="container">
<div class="abt-rt-grid">
    <div class="w3ls-grid-head text-center">
        <h3>online event booking </h3>
    </div>
    <div class="abt-form text-center">
        @include('includes.flash')
        {{--@include('includes.error')--}}
        <form action="{{route('booking.store')}}" method="post">
            @csrf
            {{--@foreach ($data['event'] as $event)--}}
                {{--@php--}}
                    {{--$booking = \App\Model\Event::find($event->id);--}}
                {{--@endphp--}}
            {{--@endforeach--}}
            <input type="hidden" name="event_id" value="{{$data['event']->id}}" >

            <div class="col-sm-4 col-xs-4 w3ls-lt-form">
                <div class="w3ls-pr">
                    <div class="w3ls-pr">
                        <input type="text" name="location" placeholder="Location" required="required">
                    </div>
                    <input type="text" name="name" placeholder="Name" required="required">
                </div>
            </div>
            <div class="col-sm-4 col-xs-4 w3ls-lt-form">
                <div class="w3ls-pr">
                    <input type="date" name="date" required="required">
                    <input type="tel" name="phone" placeholder="Phone no" required="required">
                </div>
            </div>
            <div class="col-sm-4 col-xs-4 w3ls-lt-form">
                <div class="w3ls-pr">
                    <input type="time" name="time" required="required">
                    <input type="email" name="email" placeholder="Email" required="required">
                </div>
            </div>

            <div class="clearfix"></div>
            <input type="submit" value="Book Now">

        </form>
    </div>
</div>
</div>
@endsection