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
			<h5 id="mid" name={{$mid}}></h5>
			<h5>{{$match->league}}</h5>
			<h5>{{$match->round}}</h5>
			<h5>{{$match->time}}</h5>
			<h5>主:{{$match->team1}}|{{$match->current_point}}</h5>
			<h5>客:{{$match->team2}}|{{$match->current_point2}}</h5>
			<h5>{{$match->result}}</h5>
			<h5>{{$match->score}}</h5>
			<h5 class="match-header-goal">主进:{{$match->goal}}|-{{$match->goal_lose}}</h5>
			<h5 class="match-header-goal">客进:{{$match->goal2}}|-{{$match->goal2_lose}}</h5>
			<h5 class="match-header-point">主积:{{$match->points}}</h5>
			<h5 class="match-header-point">客积:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">客期:{{$match->qiwang2}}|{{$match->percent2}}</h5>
			</a>
		</h4>
	</div>
	<div class="panel-heading">
	<h4 class="panel-title match-header" >
	<a style="display:flex;flex-direction:row;justify-content:flex-end">
	<h5 class="match-header-point">主积:{{$match->points_init}}</h5>
	<h5 class="match-header-point">客积:{{$match->points2_init}}</h5>
	<h5 class="match-header-percent">主期:{{$match->qiwang_init}}|{{$match->percent_init}}</h5>
	<h5 class="match-header-percent">客期:{{$match->qiwang2_init}}|{{$match->percent2_init}}</h5>
	</a>
	</h4>
	</div>
	@endif
			@endforeach
		<div id="collapseOne" class="panel-collapse collapse in">
          <li class="list-group-item"> 
		  <a id="chartbtn"  type="button" data-toggle="collapse" href="#collapseTwo">析</a>	
		  <div  class="ar" ></div>
		  <a data-toggle="collapse" data-parent="#accordion1"  href="#collapseH1" class="htitle">历史主场</a>
		  <div id="collapseH1" class="panel-collapse collapse in">
		  @foreach($history1 as $match)
		    <a style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none">
			<h5 id="mid" name={{$mid}}></h5>
			<!--<h5>{{$match->league}}</h5>-->
			<h5>{{$match->round}}</h5>
			<h5>{{$match->time}}</h5>
			<h5>主:{{$match->team1}}|{{$match->current_point}}</h5>
			<h5>客:{{$match->team2}}|{{$match->current_point2}}</h5>
			<h5  {{$match->result=='胜'?'class=match-header-goal':($match->result=='负'?'class=match-result-lose':'')}}>{{$match->result}}</h5>
			<h5>{{$match->score}}</h5>
			<h5>主进:{{$match->goal}}|-{{$match->goal_lose}}</h5>
			<h5>客进:{{$match->goal2}}|-{{$match->goal2_lose}}</h5>
			<h5 class="match-header-point">主积:{{$match->points}}</h5>
			<h5 class="match-header-point">客积:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">客期:{{$match->qiwang2}}|{{$match->percent2}}</h5>
			<h5>{{$match->sheng}}/{{$match->ping}}/{{$match->fu}}</h5>
			<h5>{{$match->return}}</h5>
			</a>
			@endforeach
		  </div>
		  
		   <a data-toggle="collapse" data-parent="#accordion2"  class="htitle panel-collapse collapse in"  href="#collapseH2">历史客场</a>
		   <div id="collapseH2" class="panel-collapse collapse in">
		  	 @foreach($history2 as $match)
		    <a style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none">
			<h5 id="mid" name={{$mid}}></h5>
			<!--<h5>{{$match->league}}</h5>-->
			<h5>{{$match->round}}</h5>
			<h5>{{$match->time}}</h5>
			<h5>主:{{$match->team1}}|{{$match->current_point}}</h5>
			<h5>客:{{$match->team2}}|{{$match->current_point2}}</h5>
			<h5  {{$match->result=='胜'?'class=match-header-goal':($match->result=='负'?'class=match-result-lose':'')}}>{{$match->result}}</h5>
			<h5>{{$match->score}}</h5>
			<h5>主进:{{$match->goal}}|-{{$match->goal_lose}}</h5>
			<h5>客进:{{$match->goal2}}|-{{$match->goal2_lose}}</h5>
			<h5 class="match-header-point">主积:{{$match->points}}</h5>
			<h5 class="match-header-point">客积:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">客期:{{$match->qiwang2}}|{{$match->percent2}}</h5>
			<h5>{{$match->sheng}}/{{$match->ping}}/{{$match->fu}}</h5>
			</a>
			@endforeach
			</div>
			 
			 <a data-toggle="collapse" data-parent="#accordion3"  class="htitle panel-collapse collapse in"  href="#collapseW1">近期主队</a>
		   <div id="collapseW1" class="panel-collapse collapse in">
		  	 @foreach($history3 as $match)
		    <a style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none">
			<h5 id="mid" name={{$mid}}></h5>
			<!--<h5>{{$match->league}}</h5>-->
			<h5>{{$match->round}}</h5>
			<h5>{{$match->time}}</h5>
			<h5 {{$match->team1==$team1?'class=match-team':''}}>主:{{$match->team1}}|{{$match->current_point}}</h5>
			<h5 {{$match->team2==$team1?'class=match-team':''}}>客:{{$match->team2}}|{{$match->current_point2}}</h5>
			<h5  {{$match->result=='胜'&&$match->team1==$team1||$match->result=='负'&&$match->team2==$team1?'class=match-header-goal':($match->result=='胜'&&$match->team2==$team1||$match->result=='负'&&$match->team1==$team1?'class=match-result-lose':'')}}>{{$match->result}}</h5>
			<h5>{{$match->score}}</h5>
			<h5>主进:{{$match->goal}}|-{{$match->goal_lose}}</h5>
			<h5>客进:{{$match->goal2}}|-{{$match->goal2_lose}}</h5>
			<h5 class="match-header-point">主积:{{$match->points}}</h5>
			<h5 class="match-header-point">客积:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">客期:{{$match->qiwang2}}|{{$match->percent2}}</h5>
			<h5>{{$match->sheng}}/{{$match->ping}}/{{$match->fu}}</h5>
			</a>
			@endforeach
			</div>
			
		   <a data-toggle="collapse" data-parent="#accordion4"  class="htitle panel-collapse collapse in"  href="#collapseW2">近期客队</a>
		   <div id="collapseW2" class="panel-collapse collapse in">
		  	 @foreach($history4 as $match)
		    <a style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none">
			<h5 id="mid" name={{$mid}}></h5>
			<!--<h5>{{$match->league}}</h5>-->
			<h5>{{$match->round}}</h5>
			<h5>{{$match->time}}</h5>
			<h5 {{$match->team1==$team2?'class=match-team':''}}>主:{{$match->team1}}|{{$match->current_point}}</h5>
			<h5 {{$match->team2==$team2?'class=match-team':''}}>客:{{$match->team2}}|{{$match->current_point2}}</h5>
			<h5  {{$match->result=='胜'&&$match->team1==$team2 ||$match->result=='负'&&$match->team2==$team2?'class=match-header-goal':($match->result=='胜'&&$match->team2==$team2||$match->result=='负'&&$match->team1==$team2?'class=match-result-lose':'')}}>{{$match->result}}</h5>
			<h5>{{$match->score}}</h5>
			<h5>主进:{{$match->goal}}|-{{$match->goal_lose}}</h5>
			<h5>客进:{{$match->goal2}}|-{{$match->goal2_lose}}</h5>
			<h5 class="match-header-point">主积:{{$match->points}}</h5>
			<h5 class="match-header-point">客积:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">客期:{{$match->qiwang2}}|{{$match->percent2}}</h5>
			<h5>{{$match->sheng}}/{{$match->ping}}/{{$match->fu}}</h5>
			</a>
			@endforeach
			</div>
			@foreach($odds as $odd)
			<li class="list-group-item" >{{$odd->sheng}}/{{$odd->ping}}/{{$odd->fu}}----{{$odd->updatetime}}</li>
			@endforeach
		</div>
	</div>
	<!--
  <div class="an-content">
	<table id="table_match" class="display" style="table-layout:fixed; width:120%" >
    <thead>
        <tr>
		    <th></th>
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
			<th>差值</th>
			<th>主期</th>
			<th>客期</th>
			<th>期望差</th>
			<th>主期率</th>
			<th>客期率</th>
			<th>差值</th>
			<th>MID</th>
			
        </tr>
    </thead>
	       <tfoot>
            <tr>
		    <th></th>
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
			 <th>差值</th>
			<th>主期</th>
			<th>客期</th>
			<th>期望差</th>
			<th>主期率</th>
			<th>客期率</th>
			<th>差值</th>
			<th>MID</th>
            </tr>
		
        </tfoot>
    <tbody>
	@foreach($matches as $match)
	   @if($match->mid!=$mid)
        <tr>
		<td class="details-control"><button>+</button></td>
		<td>{{$match->league}}</td>
		<td>{{$match->round}}</td>
		<td>{{$match->time}}</td>
		<td>{{$match->team1}}</td>
		<td>{{$match->team2}}</td>
		<td>{{$match->result}}</td>
		<td>{{$match->score}}</td>
		<td>{{$match->goal}}|-{{$match->goal_lose}}</td>
		<td>{{$match->goal2}}|-{{$match->goal2_lose}}</td>
		<td>{{$match->points}}</td>
		<td>{{$match->points2}}</td>
		<td>{{$match->pointcz}}</td>
		<td>{{$match->qiwang}}</td>
		<td>{{$match->qiwang2}}</td>
		<td>{{$match->qiwangcz}}</td>
		<td>{{$match->percent}}</td>
		<td>{{$match->percent2}}</td>
		<td>{{$match->percentcz}}</td>
		<td data-name="{{$match->mid}}">{{$match->mid}}</td>
        </tr>
	   
		@endif
		@endforeach
    </tbody>
    </table>
    </div>
	-->
	<div class="cache">
	 <button type="btn btn-danger btn-xs">cache-history</button>
	  <button type="btn btn-danger btn-xs">cache-history</button>
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
        "targets": [ 3 ],
		"width":'10%'
      },
	  {
	  "targets":[1],
	  "width":'5%'
	  },
	  {
	  "targets":[0],
	  "width":'5%'
	  },
	  {
	  "targets":[6],
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
	var i=0
	$('#chartbtn').on('click',function(){
		var mid=$("#mid").attr('name');
		//var name='.'+mid+'myChart';
		var l=$('.'+mid+'Chart').length;
		if(i==0)
		{	
		 i++;
		 $('.ar').load('{{URL::to('/match/chart')}}'+'/'+mid);
		}
	});
	function format ( d ) {
    // `d` is the original data object for the row
    return '<table class=ar'+d[19]+'>'+

    '</div>';
   }

	 $('#table_match tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
		var data = table.row( $(this)).data();
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
			
        }
        else {
            // Open this row
            row.child( format(data) ).show();
            tr.addClass('shown');
			var l=$('.ar'+data[19]+'').length;
			 $('.ar'+data[19]+'').load('{{URL::to('/match/chart')}}'+'/'+data[19]);
        }
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
	margin-right:2px
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
.match-result-lose{
	color:green;
}
.match-team{
	font-weight:800;
	color:black;
}
@media (max-width:768px){
	h5{
		font-size:5px;
	}
	.panel-heading{
		padding: 0 !important;
	}
	.htitle{
		font-size:5px;
	}
}
}
</style>
@endsection
