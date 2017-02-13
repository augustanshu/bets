@extends('layouts.master')

@section('title','MyBets')

@section('main')
	<div class="container">
		<form action="/analysis" method="POST">
		{!! csrf_field() !!} 
			<div> W 
				<input type="text" name="win">
			</div> 
			<br/>
			<div> D
				<input type="text" name="draw">
			</div> 
			<br/>
			<div> L 
				<input type="text" name="lose">
			</div> 
			<br/>
		   <div>
				<input type="submit" value="Up">
		   </div> 
		 </form> 
	</div>
@endsection