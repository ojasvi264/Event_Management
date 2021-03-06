@extends('layouts.backend')
@section('title','Permission view page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Permission Management
            <a href="{{route('permission.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('permission.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('permission.index')}}">Permission</a></li>
            <li class="active">View Permission</li>
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
                        <th>Module Id</th>
                        <td>{{$data['permission']->module_id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$data['permission']->name}}</td>
                    </tr>

                     <tr>
                         <th>Route</th>
                         <td>{{$data['permission']->route}}</td>
                     </tr>

                    <tr>
                    <th>Status</th>
                    <td>
                        @if($data['permission']->status==1)
                            <span class="label label-success">Active</span>
                        @else
                            <span class="label label-danger">InActive</span>
                        @endif
                    </td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['permission']->created_by)->name}}</td>
                    </tr>


                    <tr>
                        <th>Created At</th>
                        <td>{{$data['permission']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['permission']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Updated By</th>
                        <td>
                            @if(!empty($data['permission']->updated_by))
                                {{\App\User::find($data['permission']->updated_by)->name}}
                            @endif
                            {{$data['permission']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Action</th>
                        @foreach($data['permissions'] as $permission)
                            <td>
                                <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <form action="{{route('permission.destroy',$permission->id)}}" method="post"
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