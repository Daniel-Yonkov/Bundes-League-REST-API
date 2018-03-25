@extends('matches.main')

@section('table-header')
	<th>Results</th>
@endsection
@section('results')
	@include('matches.results',['matchResults' => true])
@endsection