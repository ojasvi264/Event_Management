@extends('layouts.backend')
@section('title','Testimonial View page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Testimonial Management
            <a href="{{route('testimonial.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('testimonial.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('testimonial.index')}}">Testimonial</a></li>
            <li class="active">View page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">View Page</h3>

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
                        <td>{{$data['testimonial']->name}}</td>
                    </tr>
                    <tr>
                        <th>Rank</th>
                        <td>{{$data['testimonial']->rank}}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{$data['testimonial']->title}}</td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$data['testimonial']->description}}</td>
                    </tr>

                    <tr>
                        <th>Designation</th>
                        <td>{{$data['testimonial']->designation}}</td>
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
                    <tr>
                        <th>Action</th>
                        @foreach($data['testimonials'] as $testimonial)
                            <td>
                                <a href="{{route('testimonial.edit',$testimonial->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <form action="{{route('testimonial.destroy',$testimonial->id)}}" method="post"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    <button class="btn-danger"><i class="fa fa-trash"></i>Delete</button>
                                </form>
                            </td>
                        @endforeach
                    </tr>
                    </thead>
                </table>
                <div class="row">
                   {{$data['testimonial']->image}}
                        <div class="col-md-3">
                            <div class="img-container">
                                <button class="btn btn-danger btn-close">X</button>
                                <img src="{{asset('images/testimonial/')}}" alt="" height="100" width="100">
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