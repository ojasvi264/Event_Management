@extends('layouts.backend')
@section('title','Contact View page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contact Management
            <a href="{{route('contact.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('contact.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contact</a></li>
            <li class="active">View page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Contact</h3>

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
                        <td>{{$data['contact']->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$data['contact']->email}}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>{{$data['contact']->subject}}</td>
                    </tr>

                    <tr>
                        <th>Message</th>
                        <td>{{$data['contact']->message}}</td>
                    </tr>

                    {{--<tr>--}}
                        {{--<th>Created By</th>--}}
                        {{--<td>{{\App\User::find($data['contact']->created_by)->name}}</td>--}}
                    {{--</tr>--}}


                    <tr>
                        <th>Created At</th>
                        <td>{{$data['contact']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['contact']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Updated By</th>
                        <td>
                            @if(!empty($data['contact']->updated_by))
                                {{\App\User::find($data['contact']->updated_by)->name}}
                            @endif
                            {{$data['contact']->updated_at}}</td>
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