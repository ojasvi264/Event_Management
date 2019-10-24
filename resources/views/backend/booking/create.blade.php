@extends('layouts.backend')
@section('title','Booking Create page')
{{--@section('js')--}}
    {{--<script>--}}
        {{--$("#name").keyup(function(){--}}
            {{--var Text = $(this).val();--}}
            {{--Text = Text.toLowerCase();--}}
            {{--Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');--}}
            {{--$("#slug").val(Text);--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Booking Management
            <a href="{{route('booking.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('booking.store')}}">Booking</a></li>
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
                {!! Form::open(['route' => 'booking.store', 'method' => 'post','files' => true]) !!}
                @include('backend.booking.mainform')


                <div class="form-group">

                    <button type="submit" class="btn btn-success"   value="Save Booking"><i class="fa fa-save"></i>Save Booking</button>
                    <button type="submit" class="btn btn-danger"   value="Clear"><i class="fa fa-recycle"></i>Cancel</button>
                </div>
                {!! Form::close() !!}

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection