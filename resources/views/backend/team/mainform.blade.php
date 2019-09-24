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
    {!!  Form::label('title', 'Title'); !!}
    {!! Form::text('title', null,['class' => 'form-control','id' => 'title']); !!}

    @include('includes.single_field_validation',['field'=>'title'])
</div>
<div class="form-group">
    {!!  Form::label('photo', 'Image'); !!}
    {!! Form::file('photo', null,['class' => 'form-control','id' => 'photo']); !!}

    @include('includes.single_field_validation',['field'=>'photo'])
</div>

<div class="form-group">
    {!!  Form::label('designation', 'Designation'); !!}
    {!! Form::textarea('designation', null,['class' => 'form-control','id' => 'designation']); !!}

    @include('includes.single_field_validation',['field'=>'designation'])
</div>

<div class="form-group">
    {!!  Form::label('fb_link', 'Facebook Link'); !!}
    {!! Form::textarea('fb_link', null,['class' => 'form-control','id' => 'fb_link']); !!}

    @include('includes.single_field_validation',['field'=>'fb_link'])
</div>

<div class="form-group">
    {!!  Form::label('twitter_link', 'Twitter Link'); !!}
    {!! Form::textarea('twitter_link', null,['class' => 'form-control','id' => 'twitter_link']); !!}

    @include('includes.single_field_validation',['field'=>'twitter_link'])
</div>

<div class="form-group">
    {!!  Form::label('linkedin_link', 'Linkedin Link'); !!}
    {!! Form::textarea('linkedin_link', null,['class' => 'form-control','id' => 'linkedin_link']); !!}

    @include('includes.single_field_validation',['field'=>'linkedin_link'])
</div>

