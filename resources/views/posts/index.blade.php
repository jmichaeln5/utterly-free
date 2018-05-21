@extends('layouts/app')

@section('content')
<div class="container py-5">
<h1>Posts</h1>

        @if(count($posts) > 0)
            @foreach($posts as $post)
            <div class="card">
                    <div class="card-body"> <a href="/posts/{{$post->id}}">{{$post->flavor}}</a></div>
                    <div class="card-footer"><a href="/posts/{{$post->id}}">{{$post->flavor}}</a></h3>
                    <h5>{!!$post->description!!} </div> 
            </div>
            @endforeach
            
            {{$posts->links()}}
            
        @else
            <h1 class="text-center pt-5">No Posts Found.</h1>
        @endif
</div>
@endsection

{{-- <div class="card">
        <div class="card-header"> <a href="/posts/{{$post->id}}">{{$post->flavor}}</a></div>
        <div class="card-body"><a href="/posts/{{$post->id}}">{{$post->flavor}}</a></h3>
        <h5>{!!$post->description!!} </div> 
</div> --}}