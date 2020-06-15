<?php

namespace App\Http\Controllers;

use App\todos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodosControllers extends Controller
{
      public function index()
    {
      $var=todos::all();
      return view ('to-dos.index')->with('todos',$var);
    }

    public function show(todos $todo)
  {
    return view ('to-dos.show')->with('todo',$todo);
  }

      public function create()
    {
      return view ('to-dos.create');


    }


    public function store()
  {
    $this->validate(request(),[
      'name'=>'required|min:6|max:12',
      'description'=>'required'
    ]);
    $data=request()->all();

    $todo=new todos();

    $todo->name=$data['name'];

    $todo->description=$data['description'];

    $todo->completed=false;

    $todo->save();

    session()->flash('success','Todo created successfully');
  return redirect ('/todo');
  }

    public function edit(todos $todo)
  {

  return view('to-dos.edit')->with('todo',$todo);
  }

  public function update(todos $todo)
  {
  $this->validate(request(),[
    'name'=>'required|min:6|max:12',
    'description'=>'required'
  ]);
    $data=request()->all();

    $todo->name=$data['name'];

    $todo->description=$data['description'];

    $todo->save();

    session()->flash('success','Todo updated successfully');

    return redirect ('/todo');

  }

    public function destroy(todos $todo)
    {

    $todo->delete();

    session()->flash('success','Todo deleted successfully');

    return redirect ('/todo');
}

    public function complete(todos $todo)
    {

    $todo->completed=true;

    $todo->save();

    session()->flash('success','Todo completed successfully');

    return redirect ('/todo');
    }
}
