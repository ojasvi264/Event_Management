<div class="form-group">
    {!!  Form::label('module_id', 'Module Name'); !!}
    {!! Form::select('module_id', $data['modules'],null,['class' => 'form-control']); !!}

</div>
<div class="form-group">
    {!!  Form::label('name', 'Name'); !!}
    {!! Form::text('name', null,['class' => 'form-control','id' => 'name','placeholder' => 'Enter name']); !!}
    @include('includes.single_field_validation',['field'=>'name'])
</div>
<div class="form-group">
    {!!  Form::label('route', 'Route'); !!}
    {!! Form::text('route', null,['class' => 'form-control','id' => 'route']); !!}

    @include('includes.single_field_validation',['field'=>'route'])
</div>
<div class="form-group">
    {!!  Form::label('status', 'Status'); !!}
    {!! Form::radio('status', '1') !!} Active
    {!! Form::radio('status', '0',true) !!} De Active
</div>