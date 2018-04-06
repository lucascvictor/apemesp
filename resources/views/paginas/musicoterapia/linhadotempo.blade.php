@extends('main')

@section('titulo', 'Linha do tempo APEMESP')

@section('extrastyle')

<script type="text/javascript" src="http://apemesp.com/public/js/modernizr.js') }}"></script>

<link rel="stylesheet" type="text/css" href="http://apemesp.com/public/css/timeline.css" >

<link rel="stylesheet" type="text/css" href="http://apemesp.com/public/css/timeline_components.css">

<style type="text/css">
	.cd-timeline-navigation a::after {
		background: url({{ url('images/timeline/cd-arrow.svg') }}) no-repeat 0 0;
	}
</style>
	
@endsection

@section('conteudo')

<section class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol>
				<?php $total = count ($linhadotempo); ?>
				<?php $count = 1; ?>
				@foreach($linhadotempo as $tempo)
				<li><a href="#0" data-date="01/01/{{ $tempo->ano }}" @if($total == $count) class="selected" @endif>{{ $tempo->ano }}</a></li>
					<?php $count++; ?>
				@endforeach
				
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->
			
		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-timeline-navigation -->
	</div> <!-- .timeline -->

	<div class="events-content">
		<ol>
			
		<?php $limite = (count($linhadotempo)); ?>
		<?php $i = 1; ?>
			@foreach($linhadotempo as $tempo)
			<li  @if($limite == $i) class="selected" @endif data-date="01/01/{{ $tempo->ano }}">
			
				<h2>{{ $tempo->ano }}</h2>
				<em>Acontecimentos: </em>
				<p>	
					{!! $tempo->acontecimentos !!}
				</p>
			</li>
			<?php $i++; ?>
		@endforeach

			
		</ol>
	</div> <!-- .events-content -->
</section>

@endsection


@section('extrascript')
<script type="text/javascript" src="http://apemesp.com/public/js/timeline.js">	

</script>

@endsection