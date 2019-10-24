@extends('layouts.backend')
@section('content')
    <div class="box-body">
        <table class="table table-stripped">
            <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($data['events'] as $event)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$event->name}}</td>
                    <td>{{$event->slug}}</td>
                    <td>{{$event->title}}</td>
                    <td>
                    <a href="{{route('event.show',$event->id)}}" class="btn btn-info">
                    <i class="fa fa-eye"></i>
                    View
                    </a>

                    <a href="{{route('event.edit',$event->id)}}" class="btn btn-warning">
                    <i class="fa fa-pencil"></i>
                    Edit
                    </a>

                    <form action="{{route('event.destroy',$event->id)}}" method="post"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button class="btn-danger"><i class="fa fa-trash"></i>Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection