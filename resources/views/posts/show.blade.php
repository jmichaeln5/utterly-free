
@extends('layouts/app')


@section('content')
<div class="container py-5">

    <h1>Post@show</h1>

        <div class="well">
            <h3>{{$post->flavor}}</h3>
            <h5>{!!$post->description!!}</h5>
        </div>

        <hr>

</div>
@endsection
