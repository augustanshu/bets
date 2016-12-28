@extends('layouts.master')

@section('title','MyBets')

@section('main')
<!--
   <table class="table">
  <caption></caption>
  <thead>
    <tr>
	  <th>matchType</th>
	  <th>round</th>
      <th>time</th>
      <th>status</th>
	  <th>team1</th>
	  <th>team2</th>
	  <th><th>
    </tr>
  </thead>
  <tbody>
  @foreach( $matches as $m)
    <tr>
      <th>{{$m->matchType}}</th>
	  <th>{{$m->round}}</th>
      <th>{{$m->time}}</th>
      <th>{{$m->status}}</th>
	  <th>{{$m->team1}}</th>
	  <th>{{$m->team2}}</th>
	   <th><a class="btn btn-default" href="/{{$m->mid}}" role="button">See</a></th>
    </tr>
	@endforeach
  </tbody>
</table>
-->
@endsection