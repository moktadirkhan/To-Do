@extends('layouts.app')

@section('content')

<h1 class="text-center">{{$todo->name}}</h1>

  <div class="container">

<div class="row justify-content-center">


        <div class="col-md-8">


          <div class="card card-default">
            <div class="card-header">
            <h4> Details</h4>
            </div>

            <p class="card-text">{{$todo->description}}</p>

          </div>
          <a type="button" class="btn btn-primary btn-md" href="{{$todo->id}}/edit">Edit</a>
          <a type="button" class="btn btn-danger btn-md" href="{{$todo->id}}/delete">Delete</a>
          </div>
</div>

  </div>



@endsection
