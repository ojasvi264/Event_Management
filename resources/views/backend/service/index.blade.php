@extends('layouts.backend')
@section('title','Service index page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Service Management
            <a href="{{route('service.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('service.create')}}">Service</a></li>
            <li class="active">Index page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Index Page</h3>

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
                        <th>SN</th>
                        <th>Category Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($data['services'] as $service)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$service->category_id}}</td>
                            <td>{{$service->name}}</td>
                            <td>{{$service->description}}</td>
                            <td>{{$service->image}}</td>
                            <td>{{$service->title}}</td>
                            <td>
                                <a href="{{route('service.show',$service->id)}}" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a>
                                <a href="{{route('service.edit',$service->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <form action="{{route('service.destroy',$service->id)}}" method="post"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    <button class="btn-danger"><i class="fa fa-trash"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
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