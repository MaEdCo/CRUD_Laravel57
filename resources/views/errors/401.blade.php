@extends('layouts.app')
@section('content')
	<div class="container">
		<h1>This action is unauthorized</h1>
		<a href="{{ route('Student.index') }}" class="btn btn-info btn-block-xs" >Back</a>

	</div>
@endsection()