@if (Session::has('sucesso'))

	<div class="alert alert-success" role="alert">

		<strong>Sucesso:</strong> {{ Session::get('sucesso') }}
	</div>

@endif


@if (Session::has('cuidado'))

	<div class="alert alert-warning" role="alert">

		<strong>Cuidado:</strong> {!! Session::get('cuidado') !!}
	</div>

@endif
