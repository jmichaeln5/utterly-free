@extends('layouts/app')

@section('content')
<div class="container py-5">
<h1>Posts</h1>

        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                <h3> <a href="/posts/{{$post->id}}">{{$post->flavor}}</a></h3>
                <h5>{!!$post->description!!}</h5>
                </div>
            @endforeach
            
            {{$posts->links()}}
            
        @else
            <h1 class="text-center pt-5">No Posts Found.</h1>
        @endif
</div>
@endsection