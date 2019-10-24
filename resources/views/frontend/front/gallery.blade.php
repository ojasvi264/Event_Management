@extends('layouts.frontend')

@section('content')
<!-- gallery -->
<div class="gallery">
    <div class="container">
        <h2 class="heading-agileinfo">Gallery<span>Events is a professionally managed Event</span></h2>
        <div class="gallery-grids">
            @foreach($data['galleries'] as $gallery)
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href="{{asset('images/gallery/' . $gallery->image)}}" data-lightbox="example-set" data-title="{{$gallery->title}}">
                            <img src='{{asset('images/gallery/' . $gallery->image)}}'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="gallery-image1" />
                            <figcaption>
                                <p>{{$gallery->title}}</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
            <script src="{{asset('frontend/js/lightbox-plus-jquery.min.js')}}"> </script>
        </div>
        <div class="pages text-right">
            {{$data['galleries']->links()}}
        </div>
    </div>
</div>
<!-- //gallery -->
@endsection
