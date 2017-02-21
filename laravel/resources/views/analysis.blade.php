@extends('layouts.master')

@section('title','MyBets')

@section('main') 
<div class="an">
	<div class="panel panel-default an-header">
	<div class="panel-heading">
		<h4 class="panel-title match-header" >
			<a data-toggle="collapse" data-parent="#accordion" 
			href="#collapseOne" style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none" >
			@foreach($matches as $match)
			@if($match->mid==$mid)
			<h5>{{$match->league}}</h5>
			<h5>轮次{{$match->round}}</h5>
			<h5>{{$match->time}}</h5>
			<h5>主:{{$match->team1}}</h5>
			<h5>客:{{$match->team2}}</h5>
			<h5>{{$match->result}}</h5>
			<h5>{{$match->score}}</h5>
			<h5 class="match-header-goal">主进球:{{$match->goal}}</h5>
			<h5 class="match-header-goal">客进球:{{$match->goal2}}</h5>
			<h5 class="match-header-point">主积分:{{$match->points}}</h5>
			<h5 class="match-header-point">客积分:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期望:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">主期望:{{$match->qiwang2}}|{{$match->percent2}}</h5>
		    <h5 class="match-header-fenshu">主分:{{$match->fenshu}}</h5>
			<h5 class="match-header-fenshu">客分:{{$match->fenshu2}}</h5>
		    <!--<h5>主:{{$match->fenshuu}}</h5>
			<h5>客:{{$match->fenshuu2}}</h5>-->
			@endif
			@endforeach
			</a>
		</h4>
	</div>
		<div id="collapseOne" class="panel-collapse collapse in">			
				@foreach($odds as $odd)
				<li class="list-group-item" style="display:flex;flex-direction:row">{{$odd->sheng}}/{{$odd->ping}}/{{$odd->fu}}----{{$odd->updatetime}}</li>
				@endforeach
		</div>
	</div>
  <div class="an-content">
	<table id="table_match" class="display" style="table-layout:fixed; width:120%" >
    <thead>
        <tr>
            <th>赛事</th>
            <th>轮次</th>
			<th>时间</th>
			<th>主队</th>
			<th>客队</th>
			<th>赛果</th>
			<th>比分</th>
			<th>主进球</th>
			<th>客进球</th>
			<th>主积分</th>
			<th>客积分</th>
			<th>主期</th>
			<th>客期</th>
			<th>主期率</th>
			<th>客期率</th>
			<th>主分</th>
			<th>客分</th>
			<!--<th>主2</th>
			<th>客2</th>-->
			<th>MID</th>
			
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
			<th>主进球</th>
			<th>客进球</th>
			<th>主积分</th>
			<th>客积分</th>
			<th>主期</th>
			<th>客期</th>
			<th>主期率</th>
			<th>客期率</th>
			<th>主分</th>
			<th>客分</th>
			<!--<th>主2</th>
			<th>客2</th>-->
			<th>MID</th>
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
			<!-- <th>{{$match->fenshuu}}</th>
		    <th>{{$match->fenshuu2}}</th>-->
			 <th>{{$match->qiwang}}</th>
		    <th>{{$match->qiwang2}}</th>
			 <th>{{$match->percent}}</th>
		    <th>{{$match->percent2}}</th>
			 <th>{{$match->fenshu}}</th>
		    <th>{{$match->fenshu2}}</th>
			 <th>{{$match->mid}}</th>
        </tr>
	   
		@endif
		@endforeach
    </tbody>
    </table>
 </div>
 </div>
<script>
(function($){

	 // Setup - add a text input to each footer cell
    $('#table_match tfoot th').each( function () {
        var title = $('#table_match thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="'+title+'" />' );
    } );

    // DataTable
    var table = $('#table_match').DataTable({
		"autoWidth": false,
	     "scrollY": 400,
         "scrollX": true,
	   "columnDefs": [
      {
        "targets": [ 2 ],
		"width":'10%'
        //"visible": false,
        //"searchable": false
      },
	  {
	  "targets":[1],
	  "width":'5%'
	  },
	  {
	  "targets":[5],
	  "width":'5%'
	  }
	  ]
	});

    // Apply the search
   
    table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } )
    } );
	//xuan ze duo hang
	  $('#table_match tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );
}(jQuery));
</script>
@endsection

@section('css')
<style>
.an{
 margin-top:10px;
}
.match-header{
	justify-content:space-between;
}
.match-header h5{
	margin-right:4px
}
.match-header-goal{
	color:red;
}
.match-header-point{
	color:blue;
}
.match-header-percent{
	color:darkslateblue;
}
</style>
@endsection
