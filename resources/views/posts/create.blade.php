@extends('layouts/app')

@section('content')

<div class="container pt-5">
<h1>Create Post</h1>
{!! Form::open(['action'=> 'PostsController@store', 'method'=>'POST']) !!}

    <div class="form-group">
        {{Form::label('flavor','Flavor:')}}
        {{Form::text('flavor','', ['class'=> 'form-control', 'placeholder'=> 'Flavor'])}}
    </div>

    <div class="form-group">
            {{Form::label('description','Description:')}}
            {{Form::textarea('description','',['id'=>'article-ckeditor','class'=> 'form-control', 'placeholder'=> 'Description of your new flavor :)'])}}
    </div>
    {!! Form::submit('Add Flavor', ['class'=>'btn btn-primary btn-block']) !!}
{!! Form::close() !!}
</div>

@endsection