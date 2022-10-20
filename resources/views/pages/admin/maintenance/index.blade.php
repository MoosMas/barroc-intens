@extends('layouts.base')

@section('content')
	<div class="pt-5 d-flex justify-content-between align-items-center">
		<h1>Storingsaanvragen</h1>

		<div class="w-50 d-flex justify-content-end align-items-center">
			<ul class="nav nav-pills" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="pills-table-tab" data-bs-toggle="pill" data-bs-target="#pills-table"
					        type="button" role="tab" aria-controls="pills-table" aria-selected="true"><i
								class="bi bi-list"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-calendar-tab" data-bs-toggle="pill"
					        data-bs-target="#pills-calendar" type="button" role="tab" aria-controls="pills-calendar"
					        aria-selected="false"><i class="bi bi-calendar3"></i></button>
				</li>
			</ul>

			<input class="search form-control w-50" type="search" data-column="all" placeholder="Zoeken...">
		</div>
	</div>

	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab" tabindex="0">
			<table id="data-table" class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Bedrijf</th>
						<th>Beschrijving</th>
						<th>Datum aangemaakt</th>
						<th class="sorter-false"></th>
					</tr>
				</thead>

				<tbody class="table-group-divider">
					@foreach($requests as $request)
						<tr>
							<td>{{$request->id}}</td>
							<td>{{$request->company->name}}</td>
							<td class="table-longtext-column">{{Str::limit($request->remark, 50)}}</td>
							<td>{{$request->created_at}}</td>
							<td class="text-center">
								<a href="{{route('maintenance.edit', $request)}}"
								   class="btn btn-sm btn-outline-secondary">
									<i class="bi bi-pencil-fill"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab"
		     tabindex="0">
			<div id="calendar">

			</div>
		</div>
	</div>

	<script type="module">
		document.addEventListener( 'DOMContentLoaded', function () {
			let events = {!! json_encode($requests) ?? [] !!};
			let calendarEl = document.getElementById( 'calendar' );
			let calendar = new FullCalendar.Calendar( calendarEl, {
				initialView: 'dayGridMonth',
				themeSystem: 'bootstrap5',
				locale: 'nl',
				eventTimeFormat: {
					hour: '2-digit',
					hour12: false,
					minute: '2-digit',
				},
				eventClick: ( info ) => {
					window.open( '{{url('admin/maintenance')}}' + `/${ info.event.id }` );
				},
				events: events
			} );
			calendar.render();

			$('#pills-calendar-tab').click(() => {
				calendar.render();
			});
		} );
		


		$( function () {
			$( '#data-table' ).tablesorter( {
				theme: '',
				widgets: [ "filter", "saveSort" ],
				widgetOptions: {
					filter_external: '.search',
					filter_defaultFilter: { 1: '~{query}' },
					filter_columnFilters: false,
					filter_saveFilters: true,
					saveSort: true,
				}
			} )
		} );
	</script>
@endsection
