@extends('layouts.base')

@section('content')
	<div class="pt-5">
		<h1>Storingsaanvraag</h1>
		
		<form action="{{route('maintenance.update', $maintenance)}}" method="POST" class="w-75 mx-auto">
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
				<div class="col-4">
					<label for="start_date" class="form-label">Datum</label>
					<input type="date" name="start_date" class="form-control" id="start_date"
					       value="{{$maintenance->start ? $maintenance->start->toDateString() : ''}}">
				</div>
				<div class="col-4">
					<label for="start_time" class="form-label">Tijd</label>
					<input type="time" name="start_time" class="form-control" id="start_time"
					       value="{{$maintenance->start ? $maintenance->start->toTimeString() : ''}}">
				</div>
				<div class="col-3">
					<label for="duration" class="form-label">Duur</label>
					<div class="input-group mb-3">
						<input type="number" name="duration_minutes" id="duration" class="form-control" step="5" min="0" value="{{$maintenance->duration_minutes}}">
						<span class="input-group-text">minuten</span>
					</div>
				</div>
			</div>
			
			<div class="form-group mb-3">
				<label for="employee_id" class="form-label">Medewerker</label>
				<select class="form-select" id="employee_id" name="employee_id">
					<option selected disabled>Selecteer een medewerker</option>
					@foreach($employees as $employee)
						<option value="{{$employee->id}}" @if($maintenance->employee_id == $employee->id) selected @endif>{{$employee->name}}</option>
					@endforeach
				</select>
			</div>

			<input type="submit" value="Opslaan" class="btn btn-primary">
			
		</form>		
		
	</div>
@endsection
