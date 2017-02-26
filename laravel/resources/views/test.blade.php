@extends('layouts.master')
@section('main') 
<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >1</a>
<div id="collapseOne" class="panel-collapse collapse in">
<canvas id="myChart" width="400" height="400"></canvas>
</div>
<script>
(function($){
	var ctx = $("#myChart").get(0).getContext("2d");

    var options={
    title: {
        display: true,
        text: '图表'
     }		
     };
   var data = {
	labels : ['10-11','11-12','12-13','13-14','14-15','15-16','16-17'],
	datasets : [
		{
            label: "主队",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(255,0,0,0.4)",
            borderColor: "rgba(255,0,0,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(255,0,0,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(255,0,0,1)",
            pointHoverBorderColor: "rgba(255,0,0,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [{{$datas[0]}},{{$datas[1]}},{{$datas[2]}},{{$datas[3]}},{{$datas[4]}},{{$datas[5]}},{{$datas[6]}}],
            spanGaps: false,
        },
		
		{
            label: "客队",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [{{$datas2[0]}},{{$datas2[1]}},{{$datas2[2]}},{{$datas2[3]}},{{$datas2[4]}},{{$datas2[5]}},{{$datas2[6]}}],
            spanGaps: false,
        }
		
	]
};

var chartInstance = new Chart(ctx, {
type: 'line',
data: data,
options: options,
});

}(jQuery));
</script>
@endsection