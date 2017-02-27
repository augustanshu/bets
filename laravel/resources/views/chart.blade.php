 <div id="collapseTwo"  class="panel-collapse collapse in">
 <div  style="display:flex;flex-direction:row;justify-content:space-between">
<div class="panel-body">
<canvas id="{{$mid}}myChart1" width="400"  height="400"></canvas>
</div>
<div class="panel-body">
<canvas id="{{$mid}}myChart2" width="400"  height="400"></canvas>
</div>
</div>
</div>
<script>
(function($){  
	var ctx = $("#{{$mid}}myChart1").get(0).getContext("2d");
	var ctx2 = $("#{{$mid}}myChart2").get(0).getContext("2d");

   var options={
    title: {
        display: true,
        text: 'season'
     }		
     };
	var options2={
    title: {
        display: true,
        text: 'current'
     }		
     };

	 var data = {
	labels : ['{{$season[6]}}','{{$season[5]}}','{{$season[4]}}','{{$season[3]}}','{{$season[2]}}','{{$season[1]}}','{{$season[0]}}'],
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
            data: [{{$datas[6]}},{{$datas[5]}},{{$datas[4]}},{{$datas[3]}},{{$datas[2]}},{{$datas[1]}},{{$datas[0]}}],
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
            data: [{{$datas2[6]}},{{$datas2[5]}},{{$datas2[4]}},{{$datas2[3]}},{{$datas2[2]}},{{$datas2[1]}},{{$datas2[0]}}],
            spanGaps: false,
        }
	
	]
};
	 var data2 = {
	labels : ['1-5','6-10','11-15','16-20','21-25','26-30','31-35','36-40','41-45'],
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
            data: [{{$cd[0]}},{{$cd[1]}},{{$cd[2]}},{{$cd[3]}},{{$cd[4]}},{{$cd[5]}},{{$cd[6]}},{{$cd[7]}},{{$cd[8]}}],
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
            data: [{{$cd2[0]}},{{$cd2[1]}},{{$cd2[2]}},{{$cd2[3]}},{{$cd2[4]}},{{$cd2[5]}},{{$cd2[6]}},{{$cd2[7]}},{{$cd2[8]}}],
            spanGaps: false,
        }
	
	]
};

var chartInstance = new Chart(ctx, {
type: 'line',
data: data,
options: options,
});

var chartInstance2 = new Chart(ctx2, {
type: 'line',
data: data2,
options: options2,
});
}(jQuery));
</script>
