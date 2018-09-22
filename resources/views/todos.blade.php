@extends('layout')

@section('content')

		    <form action="/create/todo" method="post">
		    	{{csrf_field()}}
				<input style="height: 30px; border: 1px solid black;" type="text" name="todo" placeholder="Create a new Todo">
		    </form>
    <hr>
	@foreach($todos as $todo)
	{{$todo->todo}} <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">x</a>
	<hr>
	@endforeach

@stop