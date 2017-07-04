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
		<button class="btn btn-success btn-xs" type="button" style="margin-bottom:1em" id="btn-fresh">更新本页</button>
	</div>
	<div class="main-list-content">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>赛事</th>
					<th>时间</th>
					<th>主队</th>
					<th>比分</th>
					<th>客队</th>
					<th>威廉</th>
				</tr>
			</thead>
			<tbody>
			@foreach( $matches as $m)
				<tr >
					<th>{{$m->league}}<span class="table-round">{{$m->round}}</span></th>
					<th>{{$m->time}}</th>
					<th>{{$m->team1}}</th>
					<th>{{$m->score}}</th>
					<th>{{$m->team2}}</th>
					<th><a class="odd-analysis" target="_blank" href="/match/{{$m->mid}}" role="button">{{$m->sheng}}/{{$m->ping}}/{{$m->fu}}<a></th>
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

</style>

@endsection