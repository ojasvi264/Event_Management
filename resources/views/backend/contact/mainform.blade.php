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
    {!!  Form::label('subject', 'Subject'); !!}
    {!! Form::text('subject', null,['class' => 'form-control','id' => 'subject']); !!}

    @include('includes.single_field_validation',['field'=>'subject'])
</div>
<div class="form-group">
    {!!  Form::label('message', 'Message'); !!}
    {!! Form::textarea('message', null,['class' => 'form-control','id' => 'message']); !!}

    @include('includes.single_field_validation',['field'=>'message'])
</div>

