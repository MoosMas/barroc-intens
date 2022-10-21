@extends('layouts.base')

@section('content')
	<div class="pt-5">
		<h1>Storingsaanvraag</h1>
		
		<form action="{{route('maintenance.update', $maintenance)}}" method="POST">
			@csrf
			@method('PUT')
			<div class="form-group mb-3">
				<label for="title" class="form-label">Titel</label>
				<input type="text" name="title" class="form-control" id="title" value="{{$maintenance->title}}">
			</div>

			<div class="form-group mb-3">
				<label for="remark" class="form-label">Beschrijving</label>
				<textarea name="remark" id="remark" cols="30" rows="5" class="form-control">{{$maintenance->remark}}</textarea>
			</div>

			<div class="form-group row mb-3">
				<div class="col">
					<label for="start_date" class="form-label">Datum</label>
					<input type="date" name="start_date" class="form-control" id="start_date"
					       value="{{$maintenance->start->toDateString()}}">
				</div>
				<div class="col">
					<label for="start_time" class="form-label">Tijd</label>
					<input type="time" name="start_time" class="form-control" id="start_time"
					       value="{{$maintenance->start->toTimeString()}}">
				</div>
				<div class="col">
					<label for="duration" class="form-label">Duur (minuten)</label>
					<input type="number" name="duration_minutes" id="duration" class="form-control" step="5" value="{{$maintenance->duration_minutes}}">
				</div>
			</div>

			<input type="submit" value="Opslaan" class="btn btn-primary">
			
		</form>		
		
	</div>
@endsection
