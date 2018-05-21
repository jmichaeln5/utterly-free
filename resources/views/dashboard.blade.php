<div class="container py-3">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <br>
                        <h3 class="text-center"> Welcome {{ Auth::user()->name }} </h3>
                        <br>
                        <a href="/posts/create" class="btn btn-block btn-success">Add New Flavor</a>

                    <br>

                    @if(count($posts) > 0)
                    <table class="table table-bordered">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->flavor}}</td>
                            <td>
                                <a href="/posts/{{$post->id}}" class="btn btn-primary btn-block">View </a>
                            </td>
                            <td>
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary text-center">Edit</a>
                            </td>
                            <td>
                                {!! Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST'] )!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=> 'btn btn-danger btn-block'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>

                        @endforeach

                    </table>
                    @else
                        <h3 class="text-center">This Admin hasn't added any flavors.</h3>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</div>