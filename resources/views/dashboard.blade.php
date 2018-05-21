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
                    
                    <h3 class="text-center"> Welcome {{ Auth::user()->name }} </h3>
                    
                    <a href="/posts/create" class="btn btn-block btn-success">Add New Flavor</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
