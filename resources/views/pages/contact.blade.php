@extends('layouts/app')


@section('content')

<div class="container py-5 bg-light">
<h1 class="text-center">Contact</h1>

<form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name:</label>
          <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
        </div>
        <div class="form-group">
                <label for="exampleFormControlInput1">Email address:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">How Can We Help You?</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>I have a question</option>
            <option>I have a compliment</option>
            <option>I have a suggestion</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>


    <button type="button" class="btn btn-lg btn-block btn-primary">Submit</button>
</div>
@endsection