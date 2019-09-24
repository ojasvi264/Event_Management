@extends('layouts.backend')
@section('title','Module index page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Module Management
            <a href="{{route('module.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Module</a></li>
            <li class="active">Create Module</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Module</h3>

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
                            <th>Route</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($data['modules'] as $module)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$module->name}}</td>
                            <td>{{$module->route}}</td>
                            <td>
                                @if($module->status==1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-danger">InActive</span>
                                 @endif
                            </td>

                            <td>
                                <a href="{{route('module.show',$module->id)}}" class="btn btn-info">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a>

                                <a href="{{route('module.edit',$module->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <form action="{{route('module.destroy',$module->id)}}" method="post"
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