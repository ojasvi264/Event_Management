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
    {!!  Form::label('location', 'Location'); !!}
    {!! Form::text('location', null,['class' => 'form-control','id' => 'location']); !!}

    @include('includes.single_field_validation',['field'=>'location'])
</div>
<div class="form-group">
    {!!  Form::label('date', 'Date'); !!}
    {!! Form::date('date', null,['class' => 'form-control','id' => 'date']); !!}

    @include('includes.single_field_validation',['field'=>'date'])
</div>

<div class="form-group">
    {!!  Form::label('phone', 'Phone'); !!}
    {!! Form::number('phone', null,['class' => 'form-control','id' => 'phone']); !!}

    @include('includes.single_field_validation',['field'=>'phone'])
</div>

<div class="form-group">
    {!!  Form::label('time', 'Time'); !!}
    {!! Form::time('time', null,['class' => 'form-control','id' => 'time']); !!}

    @include('includes.single_field_validation',['field'=>'time'])
</div>
