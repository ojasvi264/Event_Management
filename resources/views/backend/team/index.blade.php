@extends('layouts.backend')
@section('title','Team index page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Team Management
            <a href="{{route('team.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Team</a></li>
            <li class="active">Create page</li>
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
                        <th>SN</th>
                        <th>Name</th>
                        <th>Rank</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>fb_link</th>
                        <th>twitter_link</th>
                        <th>linkedin_link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($data['teams'] as $team)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$team->name}}</td>
                            <td>{{$team->rank}}</td>
                            <td>{{$team->title}}</td>
                            <td>{{$team->image}}</td>
                            <td>{{$team->designation}}</td>
                            <td>{{$team->fb_link}}</td>
                            <td>{{$team->twitter_link}}</td>
                            <td>{{$team->linkedin_link}}</td>
                            <td>
                                <a href="{{route('team.show',$team->id)}}" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a>
                                <a href="{{route('team.edit',$team->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <form action="{{route('team.destroy',$team->id)}}" method="post"
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