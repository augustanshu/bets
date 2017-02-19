@extends('layouts.master')

@section('title','MyBets')

@section('main')
<div class="main-list">
	<div class="main-list-header">
		<form id="fm" name="sm" method="post" action="/matchList" style="display:inline">
		{!! csrf_field() !!} 
		<select name="select" type="select" class="form-control handle-select">
		@foreach($terms as $term)
			<option @if($term==$tterm) selected @endif value={{$term}}>{{$term}}</option>
			@endforeach
		</select>
		</form>
		<button class="btn btn-success btn-xs" type="button" id="btn-fresh">更新本页</button>
	</div>
	<div class="main-list-content">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>matchType</th>
					<th>round</th>
					<th>time</th>
					<th>status</th>
					<th>score</th>
					<th>team1</th>
					<th>team2</th>
					<th>william</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach( $matches as $m)
				<tr>
					<th>{{$m->league}}</th>
					<th>{{$m->round}}</th>
					<th>{{$m->time}}</th>
					<th>{{$m->status}}</th>
					<th>{{$m->score}}</th>
					<th>{{$m->team1}}</th>
					<th>{{$m->team2}}</th>
					<th>{{$m->sheng}}/{{$m->ping}}/{{$m->fu}}</th>
					<th><a class="btn btn-default" target="_blank" href="/match/{{$m->mid}}" role="button">See</a></th>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
	</div>
</div>
@endsection
@section('script')
<script>
(function($){
	$(".handle-select").change(function(){
		var sval=$(".handle-select option:selected").val();
       $('.main-list-content').load('{{URL::to('matchList')}}'+'/'+sval)
     });
	 $("#btn-fresh").on('click',function(){
		 var sval=$(".handle-select option:selected").val();
		 //alert(sval);
		 $('.main-list-content').load('{{URL::to('/ft')}}'+'/'+sval)
	 })
}(jQuery));
</script>
@endsection

@section('css')
<style>
.main-list{
	margin-top:10px;
}
.main-list-header{
	display:flex;
	justify-content:space-between;
	align-items: center;
}
.handle-select{
	display:inline!important;
	max-width:150px;
}
</style>

@endsection