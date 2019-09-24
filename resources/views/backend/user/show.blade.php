@extends('layouts.backend')
@section('title','User Create page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Management
            <a href="{{route('user.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('user.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Create User</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create User</h3>

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
                        <th>Role Id</th>
                        <td>{{$data['user']->role_id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$data['user']->name}}</td>
                    </tr>

                     <tr>
                         <th>Email</th>
                         <td>{{$data['user']->email}}</td>
                     </tr>
                    <tr>
                        <th>Password</th>
                        <td>{{$data['user']->password}}</td>
                    </tr>


                    <tr>
                        <th>Created At</th>
                        <td>{{$data['user']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['user']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>
{{--                    <tr>--}}
{{--                        <th>Updated By</th>--}}
{{--                        <td>--}}
{{--                            @if(!empty($data['user']->updated_by))--}}
{{--                                {{\App\User::find($data['user']->updated_by)->name}}--}}
{{--                            @endif--}}
{{--                            {{$data['user']->updated_at}}</td>--}}
{{--                    </tr>--}}
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