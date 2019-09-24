@if($errors->has($field))
    <span class="text text-danger">{{$errors->first($field)}}</span>
@endif