@extends('layouts.backend')
@section('title','Category View page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category Management
            <a href="{{route('category.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('category.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Category</a></li>
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
                        <td>{{$data['category']->name}}</td>
                    </tr>
                    <tr>
                        <th>Rank</th>
                        <td>{{$data['category']->rank}}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{$data['category']->slug}}</td>
                    </tr>
                    <tr>
                        <th>Meta Keyword</th>
                        <td>{{$data['category']->meta_keyword}}</td>
                    </tr>
                    <tr>
                        <th>Meta Description</th>
                        <td>{{$data['category']->meta_description}}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            @if($data['category']->status==1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-danger">InActive</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['category']->created_by)->name}}</td>
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
                   {{$data['category']->image}}
                        <div class="col-md-3">
                            <div class="img-container">
                                <button class="btn btn-danger btn-close">X</button>
                                <img src="{{asset('images/category/')}}" alt="" height="100" width="100">
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