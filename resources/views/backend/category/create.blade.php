@extends('layouts.backend')
@section('title','Category Create page')
@section('js')
    <script>
        $("#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);
        });
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script> $('#lfm').filemanager('image');</script>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category Management
            <a href="{{route('category.index')}}" class="btn btn-info">
                <i class="fa fa-list"></i>
                List
            </a>

        </h1>

        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('category.index')}}">Category</a></li>
            <li class="active">Create page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Page</h3>

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
                {!! Form::open(['route' => 'category.store', 'method' => 'post','files' => true]) !!}
                @include('backend.category.mainform')


                <div class="form-group">

                    <button type="submit" class="btn btn-success"   value="Save Category"><i class="fa fa-save"></i>Save Category</button>
                    <button type="submit" class="btn btn-danger"   value="Clear"><i class="fa fa-recycle"></i>Cancel</button>
                </div>
                {!! Form::close() !!}

            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

@endsection