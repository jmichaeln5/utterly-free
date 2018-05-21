@extends('layouts/app')

@section('content')

    <h1>Post@show</h1>

        <div class="well">
            <h3>{{$post->flavor}}</h3>
            <h5>{!!$post->description!!}</h5>
        </div>

        <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline btn-default">Edit</a>

    {!! Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST'] )!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
    {!! Form::close() !!}

@endsection