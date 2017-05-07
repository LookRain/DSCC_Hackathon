@extends('layouts.master')

@section('content')
<h1><b>Past Results</b></h1>
@foreach ($scores as $score)
<div class="box">
	<p>Date and Time: {{ $score->created_at }}</p>
	<p>Score: {{ $score->score }}</p>
	@if($score->score == 0)
	<p>No Depression</p>
	@elseif($score->score < 4)
	<p>Minimal</p>
	@elseif($score->score < 9)
	<p>Mild</p>
	@elseif($score->score < 14)
	<p>Moderate</p>
	@elseif($score->score < 19)
	<p>Moderately Severe</p>
	@else
	<p>Severe</p>
	@endif
</div>


@endforeach



{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
@endsection
