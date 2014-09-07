@extends('templates.master')
@section('content')
	@foreach ($produtos as $produto)
		{{ $produto -> tb_produto }} <br>
	@endforeach
@stop