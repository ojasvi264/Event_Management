@extends('layouts.backend')
@section('title','Team View page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Team Management
            <a href="{{route('team.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('team.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Team</a></li>
            <li class="active">View page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>

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
                        <td>{{$data['team']->name}}</td>
                    </tr>
                    <tr>
                        <th>Rank</th>
                        <td>{{$data['team']->rank}}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{$data['team']->title}}</td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$data['team']->description}}</td>
                    </tr>

                    <tr>
                        <th>Designation</th>
                        <td>{{$data['team']->designation}}</td>
                    </tr>

                    <tr>
                        <th>Designation</th>
                        <td>{{$data['team']->designation}}</td>
                    </tr>
                    <tr>
                        <th>Facebook Link</th>
                        <td>{{$data['team']->fb_link}}</td>
                    </tr>

                    <tr>
                        <th>Twitter Link</th>
                        <td>{{$data['team']->twitter_link}}</td>
                    </tr>

                    <tr>
                        <th>Linkedin Link</th>
                        <td>{{$data['team']->linkedin_link}}</td>
                    </tr>

                    <tr>
                        <th>Created At</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>
                    </thead>
                </table>
                <div class="row">
                   {{$data['team']->image}}
                        <div class="col-md-3">
                            <div class="img-container">
                                <button class="btn btn-danger btn-close">X</button>
                                <img src="{{asset('images/team/')}}" alt="" height="100" width="100">
                            </div>

                        </div>
                </div>
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