@extends('layouts.backend')
@section('title','Module Create page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Module Management
            <a href="{{route('module.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>
            <a href="{{route('module.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Module</a></li>
            <li class="active">Create page</li>
        </ol>
    </section>

    <!-- Main content -->

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
            @include('includes.error')
            {!! Form::model($data['module'], ['route' => ['module.update', $data['module']->id],'method' => 'put']) !!}
            @include('backend.module.mainform')
            <div class="form-group">
                {{ Form::button('<i class="fa fa-save"></i> Update Category', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm'] )  }}
                <button type="submit" class="btn btn-danger"   value="Clear"><i class="fa fa-recycle"></i>Cancel</button>
            </div>
            {!! Form::close() !!}

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