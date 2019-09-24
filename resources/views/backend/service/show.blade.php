@extends('layouts.backend')
@section('title','Service View page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Service Management
            <a href="{{route('service.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('service.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Service</a></li>
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
                        <th>Category Name</th>
                        <td>{{$data['service']->category_id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$data['service']->name}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$data['service']->description}}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{$data['service']->title}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if($data['service']->status==1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-danger">InActive</span>
                            @endif
                        </td>
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