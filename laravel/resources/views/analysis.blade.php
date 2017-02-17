@extends('layouts.master')

@section('title','MyBets')

@section('main')
    <div class="match-header" style="display:flex;flex-direction:row;" >
	@foreach($matches as $match)
	@if($match->mid==$mid)
		<h5>{{$match->league}}</h5>
		<h5>轮次{{$match->round}}</h5>
		<h5>{{$match->time}}</h5>
		<h5>主队:{{$match->team1}}</h5>
		<h5>客队:{{$match->team2}}</h5>
		<h5>赛果:{{$match->result}}</h5>
		<h5>比分{{$match->score}}</h5>
		<h5>主6轮进球:{{$match->goal}}</h5>
		<h5>客6轮进球:{{$match->goal2}}</h5>
		<h5>主6轮积分:{{$match->points}}</h5>
		<h5>客6轮积分:{{$match->points2}}</h5>
	@endif
	@endforeach
	</div>
	<table id="table_match" class="display">
    <thead>
        <tr>
            <th>赛事</th>
            <th >轮次</th>
			<th>时间</th>
			<th>主队</th>
			<th>客队</th>
			<th>赛果</th>
			<th>比分</th>
			<th>主6轮进球</th>
			<th>客6轮进球</th>
			<th>主6轮积分</th>
			<th>客6轮积分</th>
			
        </tr>
    </thead>
	       <tfoot>
            <tr>
            <th>赛事</th>
            <th>轮次</th>
			<th>时间</th>
			<th>主队</th>
			<th>客队</th>
			<th>赛果</th>
			<th>比分</th>
			<th>主6轮进球</th>
			<th>客6轮进球</th>
			<th>主6轮积分</th>
			<th>客6轮积分</th>
            </tr>
		
        </tfoot>
    <tbody>
	@foreach($matches as $match)
	   @if($match->mid!=$mid)
        <tr>
            <th>{{$match->league}}</th>
           <th>{{$match->round}}</th>
		    <th>{{$match->time}}</th>
           <th>{{$match->team1}}</th>
		    <th>{{$match->team2}}</th>
           <th>{{$match->result}}</th>
		    <th>{{$match->score}}</th>
		    <th>{{$match->goal}}</th>
		    <th>{{$match->goal2}}</th>
           <th>{{$match->points}}</th>
		    <th>{{$match->points2}}</th>
        </tr>
	   
		@endif
		@endforeach
    </tbody>
</table>
<script>
(function($){

	 // Setup - add a text input to each footer cell
    $('#table_match tfoot th').each( function () {
        var title = $('#table_match thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );

    // DataTable
    var table = $('#table_match').DataTable();

    // Apply the search
    table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );
}(jQuery));
</script>
@endsection

@section('css')
<style>
.match-header{
	justify-content:space-between;
}
.match-header h5{
	margin-right:10px
}
</style>
@endsection
