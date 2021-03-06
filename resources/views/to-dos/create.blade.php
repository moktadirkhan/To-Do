@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card card-default">

            <div class="card-header">
                <h4>Create To-Do</h4>
                  </div>
              <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                  <ul class="list-group">
                    @foreach($errors->all() as $error)
                    <li class="list-group-item">
                          {{$error}}
                    </li>
                    @endforeach
                  </ul>
                </div>
                @endif
              <form action="/store-todo" method="POST">
                @csrf
                <fieldset class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name">
                </fieldset>
                <fieldset class="form-group">
                  <textarea name="description" type="text" class="form-control" cols="30" rows="5"  placeholder="description"></textarea>
                </fieldset>

                  <div class="form-group text-center">
                        <button class="btn btn-primary">Create</button>
                  </div>

                </form>
              </div>

        </div>
      </div>
  </div>
</div>


@endsection
