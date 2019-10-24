@extends('layouts.backend')
@section('title','Testimonial Edit page')
@section('js')
    <script>
        $("#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);
        });
    </script>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1>
            Testimonial Management
            <a href="{{route('testimonial.create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Create
            </a>

            <a href="{{route('testimonial.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('testimonial.index')}}">Testimonial</a></li>
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
                {!! Form::model($data['testimonial'], ['route' => ['testimonial.update', $data['testimonial']->id],'method' => 'put']) !!}
                @include('backend.testimonial.mainform')
                <div class="form-group">
                    {{ Form::button('<i class="fa fa-save"></i> Update Testimonial', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm'] )  }}
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