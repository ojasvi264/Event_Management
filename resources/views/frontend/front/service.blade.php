@extends('layouts.frontend')
@section('content')

<div class="services-agileits-w3layouts">
    <div class="container">
        <h2 class="heading-agileinfo">All services<span>We are here to serve you.</span></h2>
        <div class="popular-grids">
            @foreach($data['services'] as $service)
            <div class="col-md-4 popular-grid">
                <img src='{{asset('images/service/' . $service->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="event-image1" />
                <div class="popular-text">
                    <h5>{{$service->name}}</h5>
                    <div class="detail-bottom">
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>

    </div>
</div>
@endsection

