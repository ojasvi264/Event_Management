<div class="form-group">
    {!!  Form::label('name', 'Name'); !!}
    {!! Form::text('name', null,['class' => 'form-control','id' => 'name','placeholder' => 'Enter name']); !!}
    @include('includes.single_field_validation',['field'=>'name'])
</div>
<div class="form-group">
    {!!  Form::label('url', 'Url'); !!}
    {!! Form::text('url', null,['class' => 'form-control','id' => 'url']); !!}

    @include('includes.single_field_validation',['field'=>'url'])
</div>

<div class="form-group">
    {!!  Form::label('slug', 'Slug'); !!}
    {!! Form::text('slug', null,['class' => 'form-control','id' => 'slug']); !!}

    @include('includes.single_field_validation',['field'=>'slug'])
</div>
<div class="form-group">
    {!!  Form::label('photo', 'Image'); !!}
    {!! Form::file('photo', null,['class' => 'form-control','id' => 'photo']); !!}

    @include('includes.single_field_validation',['field'=>'photo'])
</div>
<div class="form-group">
    {!!  Form::label('title', 'Title'); !!}
    {!! Form::text('title', null,['class' => 'form-control','id' => 'title']); !!}

    @include('includes.single_field_validation',['field'=>'title'])
</div>
<div class="form-group">
    {!!  Form::label('description', 'Description'); !!}
    {!! Form::text('description', null,['class' => 'form-control','id' => 'description']); !!}

    @include('includes.single_field_validation',['field'=>'description'])
</div>
<div class="form-group">
    {!!  Form::label('short_description', 'Short Description'); !!}
    {!! Form::text('short_description', null,['class' => 'form-control','id' => 'short_description']); !!}

    @include('includes.single_field_validation',['field'=>'short_description'])
</div>
<div class="form-group">
    {!!  Form::label('static_key', 'Static Key'); !!}
    {!! Form::radio('static_key', '1') !!} Active
    {!! Form::radio('static_key', '0',true) !!} De Active
</div>

<div class="form-group">
    {!!  Form::label('status', 'Status'); !!}
    {!! Form::radio('status', '1') !!} Active
    {!! Form::radio('status', '0',true) !!} De Active
</div>