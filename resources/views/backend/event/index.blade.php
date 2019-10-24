@extends('layouts.backend')
@section('title','Event index page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Event Management
            <a href="{{route('event.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('event.create')}}">Event</a></li>
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
                        <th>Category Name</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Registration</th>
                        <th>Location</th>
                        <th>cost</th>
                        <th>description</th>
                        <th>Meta Description</th>
                        <th>Meta Keyword</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($data['events'] as $event)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$event->category_id}}</td>
                            <td>{{$event->name}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{$event->slug}}</td>
                            <td>{{$event->registration}}</td>
                            <td>{{$event->location}}</td>
                            <td>{{$event->cost}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->meta_description}}</td>
                            <td>{{$event->meta_keyword}}</td>
                            <td>
                                @if($event->status==1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-danger">InActive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('event.show',$event->id)}}" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a>
                                <a href="{{route('event.edit',$event->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <form action="{{route('event.destroy',$event->id)}}" method="post"
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