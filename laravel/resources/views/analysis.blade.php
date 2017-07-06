@extends('layouts.master')

@section('title','MyBets')

@section('main') 
<div>
<div>
	@foreach($matches as $match)
	@if($match->mid==$mid)
	<h5 hidden id="mid" name={{$mid}}></h5>
	<h4>{{$match->team1}}[{{$match->current_point}}] VS {{$match->team2}}[{{$match->current_point2}}]   {{$match->score}}</h4>
	<h5>{{$match->league}}[{{$match->round}}] {{$match->time}}</h5>
	<div class="table-responsive">
		<table class="table table-bordered">
		<thead>
		<tr>
		  <th>6场</th>
		  <th>{{$match->team1}}</th>
		  <th>{{$match->team2}}</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		  <td>进球</td>
		  <td>{{$match->goal}}</td>
		  <td>{{$match->goal2}}</td>
		</tr>
		<tr>
		  <td>失球</td>
		  <td>{{$match->goal_lose}}</td>
		  <td>{{$match->goal2_lose}}</td>
		</tr>
		<tr>
		  <td>积分</td>
		  <td>{{$match->points}}</td>
		  <td>{{$match->points2}}</td>
		</tr>
		<tr>
		  <td>期望</td>
		  <td>{{$match->qiwang}}|{{$match->percent}}</td>
		  <td>{{$match->qiwang2}}|{{$match->percent2}}</td>
		</tr>
		<tr>
		  <td>初积</td>
		  <td>{{$match->points_init}}</td>
		  <td>{{$match->points2_init}}</td>
		</tr>
		<tr>
		  <td>初期</td>
		  <td>{{$match->qiwang_init}}|{{$match->percent_init}}</td>
		  <td>{{$match->qiwang2_init}}|{{$match->percent2_init}}</td>
		</tr>
		</tbody>
		</table>
		</div>
    @endif
	@endforeach
</div>
</div>
<div>
<!--赔率-->
	<a data-toggle="collapse" data-parent="#accordion5"  href="#collapseH5" class="htitle"  >赔率</a>
	<div id="collapseH5" class="panel-collapse collapse in">
	<div class="table-responsive">
	<table class="table table-bordered">
	<thead>
	<tr>
	  <th>时间</th>
	  <th>赔率</th>
	  <th></th>
	  <th></th>
	</tr>
	</thead>
	<tbody>
	@foreach($odds as $odd)
	<tr>
	  <td>{{$odd->updatetime}}</td>
	  <td>{{$odd->sheng}}/{{$odd->ping}}/{{$odd->fu}}</td>
	  <td>{{$odd->peifu}}</td>
	  <td>@foreach($odd->excel as $o)
	   <h5>{{$o->sheng}}/{{$o->ping}}/{{$o->fu}}{{$o->level}}</h5>
	  @endforeach</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>
	


        	<a data-toggle="collapse" data-parent="#accordion1"  href="#collapseH1" class="htitle">历史主场</a>
		   <div id="collapseH1" class="panel-collapse collapse in">
			<div class="table-responsive team-history">
			<table class="table table-bordered table-hover table-striped" style="word-break:break-all; word-wrap:break-all;">
			<thead>
			<tr>
			<th style="max-width:20px"><h5></h5></th>
			<th><h5>时间</h5></th>
			<th><h5>对阵</h5></th>
			<th><h5></h5></th>
			<th><h5>主进</h5></th>
			<th><h5>客进</h5></th>
			<th><h5>主积</h5></th>
			<th><h5>客积</h5></th>
			<th><h5>主期</h5></th>
			<th><h5>客期</h5></th>
			</tr>
			</thead>
			<tbody>
			@foreach($history1 as $match)
			<tr>
			<td><h5>{{$match->round}}</h5></td>
			<td  style="max-width:100px"><h5>{{$match->time}}</h5></td>
			<td  style="max-width:150px"><h5>{{$match->team1}}[{{$match->current_point}}] {{$match->score}} {{$match->team2}}[{{$match->current_point2}}]</h5> </td>
			<td><h5  {{$match->result=='胜'?'class=match-header-goal':($match->result=='负'?'class=match-result-lose':'')}}>{{$match->result}}</h5></td>
			<td><h5>{{$match->goal}}|-{{$match->goal_lose}}</h5></td>
			<td><h5>{{$match->goal2}}|-{{$match->goal2_lose}}</h5></td>
			<td><h5>{{$match->points}}</h5></td>
			<td><h5>{{$match->points2}}</h5></td>
			<td><h5>{{$match->qiwang}}|{{$match->percent}}</h5></td>
			<td><h5>{{$match->qiwang2}}|{{$match->percent2}}</h5></td>
			</tr>
			@endforeach
			</tbody>
			</table>
		</div>
		</div>
		
        	<a data-toggle="collapse" data-parent="#accordion2"  href="#collapseH2" class="htitle">历史客场</a>
		   <div id="collapseH2" class="panel-collapse collapse in">
			<div class="table-responsive team-history">
			<table class="table table-bordered table-hover table-striped" style="word-break:break-all; word-wrap:break-all;">
			<thead>
			<tr>
			<th style="max-width:20px"><h5></h5></th>
			<th><h5>时间</h5></th>
			<th><h5>对阵</h5></th>
			<th><h5></h5></th>
			<th><h5>主进</h5></th>
			<th><h5>客进</h5></th>
			<th><h5>主积</h5></th>
			<th><h5>客积</h5></th>
			<th><h5>主期</h5></th>
			<th><h5>客期</h5></th>
			</tr>
			</thead>
			<tbody>
			@foreach($history2 as $match)
			<tr>
			<td><h5>{{$match->round}}</h5></td>
			<td  style="max-width:100px"><h5>{{$match->time}}</h5></td>
			<td style="max-width:150px"><h5>{{$match->team1}}[{{$match->current_point}}] {{$match->score}} {{$match->team2}}[{{$match->current_point2}}]</h5> </td>
			<td><h5  {{$match->result=='胜'?'class=match-header-goal':($match->result=='负'?'class=match-result-lose':'')}}>{{$match->result}}</h5></td>
			<td><h5>{{$match->goal}}|-{{$match->goal_lose}}</h5></td>
			<td><h5>{{$match->goal2}}|-{{$match->goal2_lose}}</h5></td>
			<td><h5>{{$match->points}}</h5></td>
			<td><h5>{{$match->points2}}</h5></td>
			<td><h5>{{$match->qiwang}}|{{$match->percent}}</h5></td>
			<td><h5>{{$match->qiwang2}}|{{$match->percent2}}</h5></td>
			</tr>
			@endforeach
			</tbody>
			</table>
		</div>
		</div>

        	<a data-toggle="collapse" data-parent="#accordion3"  href="#collapseH3" class="htitle">主队近期</a>
		   <div id="collapseH3" class="panel-collapse collapse in">
			<div class="table-responsive team-history">
			<table class="table table-bordered table-hover table-striped" style="word-break:break-all; word-wrap:break-all;">
			<thead>
			<tr>
	    	<th style="max-width:20px"><h5></h5></th>
			<th><h5>时间</h5></th>
			<th><h5>对阵</h5></th>
			<th ><h5></h5></th>
			<th><h5>主进</h5></th>
			<th><h5>客进</h5></th>
			<th><h5>主积</h5></th>
			<th><h5>客积</h5></th>
			<th><h5>主期</h5></th>
			<th><h5>客期</h5></th>
			</tr>
			</thead>
			<tbody>
			@foreach($history3 as $match)
			<tr>
			<td><h5>{{$match->round}}</h5></td>
			<td  style="max-width:100px"><h5>{{$match->time}}</h5></td>
			<td  style="max-width:150px"><h5 {{$match->team1==$team1?'class=match-team':''}}>{{$match->team1}}[{{$match->current_point}}] {{$match->score}} {{$match->team2}}[{{$match->current_point2}}]</h5> </td>
			<td><h5  {{$match->result=='胜'?'class=match-header-goal':($match->result=='负'?'class=match-result-lose':'')}}>{{$match->result}}</h5></td>
			<td><h5>{{$match->goal}}|-{{$match->goal_lose}}</h5></td>
			<td><h5>{{$match->goal2}}|-{{$match->goal2_lose}}</h5></td>
			<td><h5>{{$match->points}}</h5></td>
			<td><h5>{{$match->points2}}</h5></td>
			<td><h5>{{$match->qiwang}}|{{$match->percent}}</h5></td>
			<td><h5>{{$match->qiwang2}}|{{$match->percent2}}</h5></td>
			</tr>
			@endforeach
			</tbody>
			</table>
		</div>
		</div>

        	<a data-toggle="collapse" data-parent="#accordion4"  href="#collapseH4" class="htitle">客队近期</a>
		   <div id="collapseH4" class="panel-collapse collapse in">
			<div class="table-responsive team-history">
			<table class="table table-bordered table-hover table-striped" style="word-break:break-all; word-wrap:break-all;">
			<thead>
			<tr>
			<th style="max-width:20px"><h5></h5></th>
			<th><h5>时间</h5></th>
			<th><h5>对阵</h5></th>
			<th><h5></h5></th>
			<th><h5>主进</h5></th>
			<th><h5>客进</h5></th>
			<th><h5>主积</h5></th>
			<th><h5>客积</h5></th>
			<th><h5>主期</h5></th>
			<th><h5>客期</h5></th>
			</tr>
			</thead>
			<tbody>
			@foreach($history4 as $match)
			<tr>
			<td><h5>{{$match->round}}</h5></td>
			<td style="max-width:100px"><h5>{{$match->time}}</h5></td>
			<td style="max-width:150px"><h5 {{$match->team2==$team2?'class=match-team':''}}>{{$match->team1}}[{{$match->current_point}}] {{$match->score}} {{$match->team2}}[{{$match->current_point2}}]</h5> </td>
			<td><h5  {{$match->result=='胜'?'class=match-header-goal':($match->result=='负'?'class=match-result-lose':'')}}>{{$match->result}}</h5></td>
			<td><h5>{{$match->goal}}|-{{$match->goal_lose}}</h5></td>
			<td><h5>{{$match->goal2}}|-{{$match->goal2_lose}}</h5></td>
			<td><h5>{{$match->points}}</h5></td>
			<td><h5>{{$match->points2}}</h5></td>
			<td><h5>{{$match->qiwang}}|{{$match->percent}}</h5></td>
			<td><h5>{{$match->qiwang2}}|{{$match->percent2}}</h5></td>
			</tr>
			@endforeach
			</tbody>
			</table>
		</div>
		</div>
</div>
<!--图表-->  
<div >
		 <h4 id="chartbtn"  type="button" data-toggle="collapse" href="#collapseTwo">析</h4>	
		  <div  class="ar" ></div>
</div>
		<!--
<div class="an">
	<div class="panel panel-default an-header">
	
	<div class="panel-heading">
		<h4 class="panel-title match-header" >
			<a data-toggle="collapse" data-parent="#accordion" 
			href="#collapseOne" style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none" >
			@foreach($matches as $match)
			@if($match->mid==$mid)
			<h5 hidden id="mid" name={{$mid}}></h5>
			<h5 class="match-header-goal">主进:{{$match->goal}}|-{{$match->goal_lose}}</h5>
			<h5 class="match-header-goal">客进:{{$match->goal2}}|-{{$match->goal2_lose}}</h5>
			<h5 class="match-header-point">主积:{{$match->points}}</h5>
			<h5 class="match-header-point">客积:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">客期:{{$match->qiwang2}}|{{$match->percent2}}</h5>
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
		 <a id="chartbtn" style="text-align:center" type="button" data-toggle="collapse" href="#collapseTwo">析</a>	
		  <div  class="ar" ></div>
		  <a data-toggle="collapse" data-parent="#accordion1"  href="#collapseH1" class="htitle">历史主场</a>
		  <div id="collapseH1" class="panel-collapse collapse in">
		  @foreach($history1 as $match)
		    <a style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none">
			<h5 id="mid" name={{$mid}}></h5>
			<h5>{{$match->league}}</h5>
			<h5>[{{$match->round}}]</h5>
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
			<h5>{{$match->league}}</h5>
			<h5>[{{$match->round}}]</h5>
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
			<h5>{{$match->league}}</h5>
			<h5>[{{$match->round}}]</h5>
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
			<h5>{{$match->league}}</h5>
			<h5>[{{$match->round}}]</h5>
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
			

		</div>
	</div>
	-->
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
	<div class="cache" style="text-align:center">
	 <button id="refreshCache" class="btn btn-danger btn-xs">更新</button>
	</div>
 </div>
<script>
(function($){
  /*
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
	*/
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
	$('#refreshCache').on('click',function(){
		var key='a'+$("#mid").attr('name');
	     swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "<"+key+">:Yes, delete it!",
                closeOnConfirm: false
            }, function(){
				$.ajax({
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					url:'/admin/cache/'+key+'',
					type:'DELETE',
					processData:false,
					contentType:false,
					success:function(data)
					{
						swal("delete!","ok",'success');
					}
					
				})
			});
	});
	/*
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
	*/
}(jQuery));
</script>
@endsection

@section('css')
<style>

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
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 2px !important;
}
.team-history h5{
	margin-top:1px !important;
	margin-bottom:1px !important;
}
.team-history thead tr th {
    vertical-align: middle;
}
	.htitle{
		color:black;
		display:block;
		font-size:15px;
		margin-bottom:5px;
	}
</style>
@endsection
