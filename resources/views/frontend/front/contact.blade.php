@extends('layouts.frontend')
@section('content')
<!-- contact -->
<div class="w3ls_address_mail_footer_grids">
    <div class="container">
        <h2 class="heading-agileinfo">Contact<span>Events is a professionally managed Event</span></h2>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9812436072443!2d85.34553751502847!3d27.686974582800183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198c48dcfcb1%3A0x2046c9b9fb973262!2sSchool%20of%20Information%20Technologies%20(School%20of%20IT)!5e0!3m2!1sen!2snp!4v1570009384670!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>        </div>
        <div class="col-md-6 contact-form">
            <h4 class="white-w3ls">Contact Form</h4>
            @include('includes.flash')
            @include('includes.error')
            <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="styled-input agile-styled-input-top">
                    <input type="text" name="name" required="">
                    <label>Name</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="email" name="email" required="">
                    <label>Email</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="text" name="subject" required="">
                    <label>Subject</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <textarea name="message" required=""></textarea>
                    <label>Message</label>
                    <span></span>
                </div>
                <input type="submit" value="SEND">
            </form>
        </div>
        <div class="col-md-6 contactright">
            <h3>Contact Address</h3>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <p>  {{$data['configurations']->address}}</p>
            </div>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p> {{$data['configurations']->phone}}</p>
            </div>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <p>  {{$data['configurations']->email}}</p>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //contact -->
@endsection
