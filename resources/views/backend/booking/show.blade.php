@extends('layouts.backend')
@section('title','Booking View page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Booking Management
            <a href="{{route('booking.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('booking.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('booking.index')}}">Booking</a></li>
            <li class="active">View page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">View Booking Page</h3>

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
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <td>{{$data['booking']->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$data['booking']->email}}</td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td>{{$data['booking']->location}}</td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td>{{$data['booking']->phone}}</td>
                    </tr>

                    {{--<tr>--}}
                    {{--<th>Created By</th>--}}
                    {{--<td>{{\App\User::find($data['booking']->created_by)->name}}</td>--}}
                    {{--</tr>--}}


                    <tr>
                        <th>Date</th>
                        <td>{{$data['booking']->date}}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{$data['booking']->time}}</td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>

                    </thead>
                </table>
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