<div class="form-group">
    {!!  Form::label('category_id', 'Category Name'); !!}
    {!! Form::select('category_id', $data['categories'],null,['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!!  Form::label('name', 'Name'); !!}
    {!! Form::text('name', null,['class' => 'form-control','id' => 'name','placeholder' => 'Enter name']); !!}
    @include('includes.single_field_validation',['field'=>'name'])
</div>
<div class="form-group">
    {!!  Form::label('title', 'Title'); !!}
    {!! Form::text('title', null,['class' => 'form-control','id' => 'title']); !!}

    @include('includes.single_field_validation',['field'=>'title'])
</div>
<div class="form-group">
    {!!  Form::label('slug', 'Slug'); !!}
    {!! Form::text('slug', null,['class' => 'form-control','id' => 'slug']); !!}

    @include('includes.single_field_validation',['field'=>'slug'])
</div>
<div class="form-group">
    {!!  Form::label('date', 'Date'); !!}
    {!! Form::date('date', null,['class' => 'form-control','id' => 'date']); !!}

    @include('includes.single_field_validation',['field'=>'date'])
</div>
<div class="form-group">
    {!!  Form::label('registration', 'Registration'); !!}
    {!! Form::text('registration', null,['class' => 'form-control','id' => 'registration']); !!}

    @include('includes.single_field_validation',['field'=>'registration'])
</div>

<div class="form-group">
    {!!  Form::label('location', 'Location'); !!}
    {!! Form::text('location', null,['class' => 'form-control','id' => 'location']); !!}

    @include('includes.single_field_validation',['field'=>'location'])
</div>
<div class="form-group">
    {!!  Form::label('cost', 'Cost'); !!}
    {!! Form::number('cost', null,['class' => 'form-control','id' => 'cost']); !!}

    @include('includes.single_field_validation',['field'=>'cost'])
</div>
<div class="form-group">
    {!!  Form::label('photo', 'Image'); !!}
    {!! Form::file('photo', null,['class' => 'form-control','id' => 'photo']); !!}

    @include('includes.single_field_validation',['field'=>'photo'])
</div>
<div class="form-group">
    {!!  Form::label('description', 'Description'); !!}
    {!! Form::textarea('description', null,['class' => 'form-control','id' => 'description']); !!}

    @include('includes.single_field_validation',['field'=>'description'])
</div>

<div class="form-group">
    {!!  Form::label('meta_keyword', 'Meta Keyword'); !!}
    {!! Form::textarea('meta_keyword', null,['class' => 'form-control','id' => 'meta_keyword']); !!}

    @include('includes.single_field_validation',['field'=>'meta_keyword'])
</div>
<div class="form-group">
    {!!  Form::label('meta_description', 'Meta Description'); !!}
    {!! Form::textarea('meta_description', null,['class' => 'form-control','id' => 'meta_description']); !!}

    @include('includes.single_field_validation',['field'=>'meta_description'])
</div>

<div class="form-group">
    {!!  Form::label('status', 'Status'); !!}
    {!! Form::radio('status', '1') !!} Active
    {!! Form::radio('status', '0',true) !!} De Active
</div>