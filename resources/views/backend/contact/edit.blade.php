@extends('layouts.backend')
@section('title','Contact edit page')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Contact Management
            <a href="{{route('contact.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>

            <a href="{{route('contact.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('contact.index')}}">Contact</a></li>
            <li class="active">Edit page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Page</h3>

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
                {!! Form::model($data['contact'], ['route' => ['contact.update', $data['contact']->id],'method' => 'put']) !!}
                @include('backend.contact.mainform')
                <div class="form-group">
                    {{ Form::button('<i class="fa fa-save"></i> Update Contact', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm'] )  }}
                    <button type="submit" class="btn btn-danger"   value="Clear"><i class="fa fa-recycle"></i>Cancel</button>
                </div>
                {!! Form::close() !!}

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection