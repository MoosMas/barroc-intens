@extends('layouts.base')

@section('content')
	<div class="d-flex pt-5">
		<div class="p-2 flex-fill">
			<ul class="list-group">
				<li class="list-group-item d-flex justify-content-between align-items-start ">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Naam</div>
						{{$company->name}}
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Contactpersoon</div>
						<ul class="list-group">
							<li class="list-group-item">
								<div class="fw-bold">Naam</div> {{$company->contact->name}}</li>
							<li class="list-group-item">
								<div class="fw-bold">E-mailadres</div> {{$company->contact->email}}</li>
						</ul>
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Telefoonnummer</div>
						({{$company->country_code}}){{$company->phone}}
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Adres</div>
						{{$company->street}} {{$company->house_number}}, {{$company->city}}
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">BKR gecontroleerd @if(!$company->bkr_checked_at)
								<span class="text-danger fw-bold"><i class="bi bi-exclamation-triangle"></i></span>
							@endif</div>
						{{$company->bkr_checked_at ?? '-'}}
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Aangemaakt</div>
						{{$company->created_at->format('d-m-Y H:i:s')}}
					</div>
				</li>

				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">Aangepast</div>
						{{$company->updated_at->format('d-m-Y H:i:s')}}
					</div>
				</li>
			</ul>
		</div>

		<div class="p-2 flex-fill">
			<div class="ms-2 me-auto">
				<div class="fw-bold">Contracten</div>
				<ul class="list-group">
					@foreach ($company->contracts as $contract)
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Startdatum</th>
									<th>Einddatum</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{$contract->id}}</td>
									<td>{{$contract->start_date}}</td>
									<td>{{$contract->end_date}}</td>
									<td class="text-center">
										<a href="{{route('contracts.show', $contract)}}"
										   class="btn btn-sm btn-outline-secondary">
											<i class="bi bi-eye"></i>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
