@extends('layouts.backend')
@section('title','Slider view page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Slider Management
            <a href="{{route('slider.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('slider.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('slider.index')}}">Slider</a></li>
            <li class="active">View Slider</li>
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
                    <th>Title</th>
                    <td>{{$data['slider']->title}}</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>{{$data['slider']->description}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>{{$data['slider']->image}}</td>
                    </tr>
                    <tr>
                        <th>Link</th>
                        <td>{{$data['slider']->link}}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            @if($data['slider']->status==1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label label-danger">InActive</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['slider']->created_by)->name}}</td>
                    </tr>


                    <tr>
                        <th>Created At</th>
                        <td>{{$data['slider']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['slider']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Deleted At</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Updated By</th>
                        <td>
                            @if(!empty($data['slider']->updated_by))
                                {{\App\User::find($data['slider']->updated_by)->name}}
                            @endif
                            {{$data['slider']->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Action</th>
                        @foreach($data['sliders'] as $slider)
                            <td>
                                <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <form action="{{route('slider.destroy',$slider->id)}}" method="post"
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