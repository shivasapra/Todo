@extends('layout')

@section('content')

		    <form action="/create/todo" method="post">
		    	{{csrf_field()}}
				<input style="height: 30px; border: 1px solid black;" type="text" name="todo" placeholder="Create a new Todo">
		    </form>
    <hr>
	@foreach($todos as $todo)
	<span style="font-weight: bold;">{{$todo->todo}}</span> 
	<a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">Delete</a>
	<a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-info">Update</a>
	@if($todo->completed == 0)
	<a href="{{route('todo.complete',['id'=>$todo->id])}}" class="btn btn-success">Mark As Completed</a>
	@else
	{{'Completed'}}
	@endif
	<hr>
	@endforeach

@stop