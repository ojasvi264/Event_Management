<div class="form-group">
    {!!  Form::label('event_id', 'Event Name'); !!}
    {!! Form::select('event_id', $data['events'],null,['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!!  Form::label('photo', 'Image'); !!}
    {!! Form::file('photo', null,['class' => 'form-control','id' => 'photo']); !!}

    @include('includes.single_field_validation',['field'=>'photo'])
</div>
<div class="form-group">
    {!!  Form::label('rank', 'Rank'); !!}
    {!! Form::number('rank', null,['class' => 'form-control','id' => 'rank']); !!}

    @include('includes.single_field_validation',['field'=>'rank'])
</div>

<div class="form-group">
    {!!  Form::label('title', 'Title'); !!}
    {!! Form::text('title', null,['class' => 'form-control','id' => 'title']); !!}

    @include('includes.single_field_validation',['field'=>'title'])
</div>

<div class="form-group">
    {!!  Form::label('status', 'Status'); !!}
    {!! Form::radio('status', '1') !!} Active
    {!! Form::radio('status', '0',true) !!} De Active
</div>