@extends('layouts.frontend')
@section('content')
    <!-- about -->
    <div class="faq">

        <div class="container">

            <h2 class="heading-agileinfo"> Terms and Conditions <span>You need to agree our terms and conditions to be one of our members.</span></h2>
            <div class="about-grids-1">
                <div class="col-md-5 wthree-about-left">
                </div>
                <div class="col-md-7 agileits-about-right">
                    <h5>{{$data['terms'][0]->title}}</h5>
                    <p>{{$data['terms'][0]->short_description}}
                        <span>{{$data['terms'][0]->description}}</span>
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>

    </div>
@endsection
