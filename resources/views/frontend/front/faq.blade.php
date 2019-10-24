@extends('layouts.frontend')
@section('content')
    <!-- about -->
    <div class="faq">

        <div class="container">

            <h2 class="heading-agileinfo"> FAQ <span>Frequently Asked Question</span></h2>
            <div class="about-grids-1">
                <div class="col-md-5 wthree-about-left">
                </div>
                <div class="col-md-7 agileits-about-right">
                    <h5>{{$data['faq'][0]->title}}</h5>
                    <p>{{$data['faq'][0]->short_description}}
                        <span>{{$data['faq'][0]->description}}</span>
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>

    </div>
@endsection
