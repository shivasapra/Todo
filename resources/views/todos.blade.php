@extends('layout')

@section('content')
@foreach($todos as $todo)
{{$todo->id}}. {{$todo->todo}}
<hr>
@endforeach
@stop