@extends('layout')

@section('content')

		    <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">
		    	{{csrf_field()}}
				<input type="text" name="todo" value="{{$todo->todo}}">
		    </form>
@stop