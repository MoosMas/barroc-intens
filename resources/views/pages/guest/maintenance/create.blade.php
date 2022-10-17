@extends('layouts.base')

@section('content')
	<h1>Storingen</h1>
	<h2>Meld een storing</h2>
	<form action=""></form>
	<form method="post" action="{{route('maintenance.store')}}">
		@csrf
		<div class="form-group mb-3">
			<label for="title" class="form-label">Titel</label>
			<input type="text" name="title" class="form-control" id="title">
		</div>
		<div class="form-group mb-3">
			<label for="remark" class="form-label">Beschrijving</label>
			<textarea name="remark" id="remark" cols="30" rows="5" class="form-control"></textarea>
		</div>

		<input type="submit" value="Save Item" class="btn btn-primary">

	</form>
@endsection