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
			<h5>主:{{$match->team1}}</h5>
			<h5>客:{{$match->team2}}</h5>
			<h5>{{$match->result}}</h5>
			<h5>{{$match->score}}</h5>
			<h5 class="match-header-goal">主进球:{{$match->goal}}</h5>
			<h5 class="match-header-goal">客进球:{{$match->goal2}}</h5>
			<h5 class="match-header-point">主积分:{{$match->points}}</h5>
			<h5 class="match-header-point">客积分:{{$match->points2}}</h5>
			<h5 class="match-header-percent">主期望:{{$match->qiwang}}|{{$match->percent}}</h5>
			<h5 class="match-header-percent">客期望:{{$match->qiwang2}}|{{$match->percent2}}</h5>
		    <!--<h5 class="match-header-fenshu">主分:{{$match->fenshu}}</h5>
			<h5 class="match-header-fenshu">客分:{{$match->fenshu2}}</h5>-->
		    <!--<h5>主:{{$match->fenshuu}}</h5>
			<h5>客:{{$match->fenshuu2}}</h5>-->
			@endif
			@endforeach
			</a>
		</h4>
	</div>
		<div id="collapseOne" class="panel-collapse collapse in">
          <li class="list-group-item"> 
		  <a id="chartbtn"  type="button" data-toggle="collapse" href="#collapseTwo">析</a>	
		  <div  class="ar" ></div>
		  <a data-toggle="collapse" data-parent="#accordion1"  href="#collapseH1">H1</a>
		  <div id="collapseH1" class="panel-collapse collapse in">
		  @foreach($history1 as $match)
		    <a style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none">
			<h5 id="mid" name={{$mid}}></h5>
			<!--<h5>{{$match->league}}</h5>-->
			<h5>{{$match->round}}</h5>
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
			<h5 class="match-header-percent">客期望:{{$match->qiwang2}}|{{$match->percent2}}</h5>
			<h5>{{$match->w}}/{{$match->d}}/{{$match->f}}</h5>
		    <!--<h5 class="match-header-fenshu">主分:{{$match->fenshu}}</h5>
			<h5 class="match-header-fenshu">客分:{{$match->fenshu2}}</h5>-->
		    <!--<h5>主:{{$match->fenshuu}}</h5>
			<h5>客:{{$match->fenshuu2}}</h5>-->
			</a>
			@endforeach
			
		  </div>
		   <a data-toggle="collapse" data-parent="#accordion2"  class="panel-collapse collapse in"  href="#collapseH2">H2</a>
		   <div id="collapseH2" class="panel-collapse collapse in">
		  	 @foreach($history2 as $match)
		    <a style="display:flex;flex-direction:row;justify-content:space-between;text-decoration:none">
			<h5 id="mid" name={{$mid}}></h5>
			<!--<h5>{{$match->league}}</h5>-->
			<h5>{{$match->round}}</h5>
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
			<h5 class="match-header-percent">客期望:{{$match->qiwang2}}|{{$match->percent2}}</h5>
			<h5>{{$match->w}}/{{$match->d}}/{{$match->f}}</h5>
		    <!--<h5 class="match-header-fenshu">主分:{{$match->fenshu}}</h5>
			<h5 class="match-header-fenshu">客分:{{$match->fenshu2}}</h5>-->
		    <!--<h5>主:{{$match->fenshuu}}</h5>
			<h5>客:{{$match->fenshuu2}}</h5>-->
			</a>
			@endforeach
			</div>
				@foreach($odds as $odd)
				<li class="list-group-item" >{{$odd->sheng}}/{{$odd->ping}}/{{$odd->fu}}----{{$odd->updatetime}}</li>
				@endforeach
		</div>
	</div>
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
			<th>主分</th>
			<th>客分</th>
			<!--<th>主2</th>
			<th>客2</th>-->
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
		<td class="details-control"><button>+</button></td>
		<td>{{$match->league}}</td>
		<td>{{$match->round}}</td>
		<td>{{$match->time}}</td>
		<td>{{$match->team1}}</td>
		<td>{{$match->team2}}</td>
		<td>{{$match->result}}</td>
		<td>{{$match->score}}</td>
		<td>{{$match->goal}}</td>
		<td>{{$match->goal2}}</td>
		<td>{{$match->points}}</td>
		<td>{{$match->points2}}</td>
		<td>{{$match->pointcz}}</td>
		<!-- <td>{{$match->fenshuu}}</td>
		<td>{{$match->fenshuu2}}</td>-->
		<td>{{$match->qiwang}}</td>
		<td>{{$match->qiwang2}}</td>
		<td>{{$match->qiwangcz}}</td>
		<td>{{$match->percent}}</td>
		<td>{{$match->percent2}}</td>
		<td>{{$match->fenshu}}</td>
		<td>{{$match->fenshu2}}</td>
		<td data-name="{{$match->mid}}">{{$match->mid}}</td>
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
    return '<table class=ar'+d[20]+'>'+

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
			var l=$('.ar'+data[20]+'').length;
			 $('.ar'+data[20]+'').load('{{URL::to('/match/chart')}}'+'/'+data[20]);
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
</style>
@endsection
