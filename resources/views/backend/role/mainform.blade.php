<div class="form-group">
    {!!  Form::label('name', 'Name'); !!}
    {!! Form::text('name', null,['class' => 'form-control','id' => 'name','placeholder' => 'Enter name']); !!}
    @include('includes.single_field_validation',['field'=>'name'])
</div>
<div class="form-group">
    {!!  Form::label('status', 'Status'); !!}
    {!! Form::radio('status', '1') !!} Active
    {!! Form::radio('status', '0',true) !!} De Active
</div>