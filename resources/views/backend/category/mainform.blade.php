<div class="form-group">
    {!!  Form::label('name', 'Name'); !!}
    {!! Form::text('name', null,['class' => 'form-control','id' => 'name','placeholder' => 'Enter name']); !!}
    @include('includes.single_field_validation',['field'=>'name'])
</div>
<div class="form-group">
    {!!  Form::label('rank', 'Rank'); !!}
    {!! Form::number('rank', null,['class' => 'form-control','id' => 'rank']); !!}

    @include('includes.single_field_validation',['field'=>'rank'])
</div>

<div class="form-group">
    {!!  Form::label('slug', 'Slug'); !!}
    {!! Form::text('slug', null,['class' => 'form-control','id' => 'slug']); !!}

    @include('includes.single_field_validation',['field'=>'slug'])
</div>
<div class="form-group">
    <i class="fa fa-picture-o"></i>
    {!!  Form::label('photo', 'Image'); !!}
    {!! Form::file('photo', null,['class' => 'form-control','id' => 'lfm']); !!}

    @include('includes.single_field_validation',['field'=>'photo'])
</div>

{{--<div class="form-group">--}}
    {{--{!!  Form::label('icon', 'Icon'); !!}--}}
    {{--{!! Form::file('icon', null,['class' => 'form-control','id' => 'icon']); !!}--}}

    {{--@include('includes.single_field_validation',['field'=>'icon'])--}}
{{--</div>--}}

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
<script>
