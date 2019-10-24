<div class="form-group">
    {!!  Form::label('role_id', 'Role Name'); !!}
    {!! Form::select('role_id', $data['roles'],null,['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!!  Form::label('name', 'Name'); !!}
    {!! Form::text('name', null,['class' => 'form-control','id' => 'name','placeholder' => 'Enter name']); !!}
    @include('includes.single_field_validation',['field'=>'name'])
</div>
<div class="form-group">
    {!!  Form::label('email', 'Email'); !!}
    {!! Form::email('email', null,['class' => 'form-control','id' => 'email']); !!}

    @include('includes.single_field_validation',['field'=>'email'])
</div>
<div class="form-group">
    {!!  Form::label('password', 'Password'); !!}
    {!! Form::password('password', null,['class' => 'form-control','id' => 'password']); !!}

    @include('includes.single_field_validation',['field'=>'password'])
</div>