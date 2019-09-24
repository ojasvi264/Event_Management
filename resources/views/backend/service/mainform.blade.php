<div class="form-group">
    {!!  Form::label('category_id', 'Category Name'); !!}
    {!! Form::select('category_id', $data['categories'],null,['class' => 'form-control']); !!}
</div>
<div class="form-group">
    {!!  Form::label('name', 'Name'); !!}
    {!! Form::text('name', null,['class' => 'form-control','id' => 'name']); !!}

    @include('includes.single_field_validation',['field'=>'name'])
</div>
<div class="form-group">
    {!!  Form::label('description', 'Description'); !!}
    {!! Form::text('description', null,['class' => 'form-control','id' => 'description']); !!}

    @include('includes.single_field_validation',['field'=>'description'])
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
