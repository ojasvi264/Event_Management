@extends('layouts.backend')
@section('title','Event View page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Event Management
            <a href="{{route('event.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('event.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Event</a></li>
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
                        <td>{{$data['event']->name}}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{$data['event']->title}}</td>
                    </tr>
                    <tr>
                        <th>Registration</th>
                        <td>{{$data['event']->registration}}</td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td>{{$data['event']->location}}</td>
                    </tr>
                    <tr>
                        <th>Meta Keyword</th>
                        <td>{{$data['event']->meta_keyword}}</td>
                    </tr>
                    <tr>
                        <th>Meta Description</th>
                        <td>{{$data['event']->meta_description}}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            @if($data['event']->status==1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-danger">InActive</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['event']->created_by)->name}}</td>
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