@extends('layouts.backend')
@section('title','Configuration Create page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Configuration Management
            <a href="{{route('configuration.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('configuration.index')}}">Configuration</a></li>
            <li class="active">Create page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Page</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                @include('includes.flash')
                @include('includes.error')
                <form action="{{route('configuration.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name"/>
                        @include('includes.single_field_validation',['field'=>'name'])
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" />
                        @include('includes.single_field_validation',['field'=>'email'])
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" class="form-control" id="phone" />
                        @include('includes.single_field_validation',['field'=>'phone'])
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" class="form-control" id="website" />
                        @include('includes.single_field_validation',['field'=>'website'])
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" />
                        @include('includes.single_field_validation',['field'=>'address'])
                    </div>

                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo" />
                        @include('includes.single_field_validation',['field'=>'logo'])
                    </div>

                    <div class="form-group">
                        <label for="count">Count</label>
                        <input type="number" name="count" class="form-control" id="count"/>
                        @include('includes.single_field_validation',['field'=>'count'])
                    </div>

                    <div class="form-group">
                        <label for="googlemap_link">GoogleMap Link</label>
                        <input type="text" name="googlemap_link" class="form-control" id="googlemap_link"/>
                        @include('includes.single_field_validation',['field'=>'googlemap_link'])
                    </div>
                    <div class="form-group">
                        <label for="fav_icon">Fav Icon</label>
                        <input type="logo" name="fav_icon" class="form-control" id="fav_icon"/>
                        @include('includes.single_field_validation',['field'=>'fav_icon'])
                    </div>

                    <div class="form-group">
                        <label for="fb_link">Facebook Link</label>
                        <input type="text" name="fb_link" class="form-control" id="fb_link"/>
                        @include('includes.single_field_validation',['field'=>'fb_link'])
                    </div>

                    <div class="form-group">
                        <label for="twitter_link">Twitter Link</label>
                        <input type="text" name="twitter_link" class="form-control" id="twitter_link" />
                        @include('includes.single_field_validation',['field'=>'twitter_link'])
                    </div>

                    <div class="form-group">
                        <label for="google_link">Google Link</label>
                        <input type="text" name="google_link" class="form-control" id="google_link"/>
                        @include('includes.single_field_validation',['field'=>'google_link'])
                    </div>

                    <div class="form-group">
                        <label for="vimeo_link">Vimeo Link</label>
                        <input type="text" name="vimeo_link" class="form-control" id="vimeo_link"/>
                        @include('includes.single_field_validation',['field'=>'vimeo_link'])
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-success" value="Save Configuration"><i class="fa fa-save"></i>Save Configuration</button>
                        <button type="submit" class="btn btn-danger" value="Clear"><i class="fa fa-recycle"></i>Cancel</button>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection