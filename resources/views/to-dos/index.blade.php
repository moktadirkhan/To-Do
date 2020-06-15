@extends('layouts.app')

@section('content')


  <div class="container">
    <h1 class="text-center my-5">Todos page</h1>
    <div class="row justify-content-center">
      <div class="col-md-8 .offset-md-2">
        <div class="card card-default">
          <div class="card-header">
            Todos
          </div>
          <div class="card-body">

            <ul class="list-group">
              <?php foreach ($todos as $todo ){ ?>

              <li class="list-group-item">

                {{$todo->name}}

                  @if(!$todo->completed)
                  <a href="todo/{{$todo->id}}/complete" type="button" style="color:white;" class="btn btn-warning btn-sm float-right">Complete</a>
                  @endif

                <a href="todo/{{$todo->id}}"type="button" class="btn btn-primary btn-sm float-right mr-2">View</a>
              </li>
            <?php } ?>
              </ul>
            </div>
        </div>

      </div>
    </div>
  </div>


@endsection
