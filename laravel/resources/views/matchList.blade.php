
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>赛事</th>
					<th>轮次</th>
					<th>时间</th>
					<th>状态</th>
					<th>主队</th>
					<th>比分</th>
					<th>客队</th>
					<th>威廉初盘</th>
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
					<th>{{$m->team1}}</th>
					<th>{{$m->score}}</th>
					<th>{{$m->team2}}</th>
					<th>{{$m->sheng}}/{{$m->ping}}/{{$m->fu}}</th>
					<th><a target="_blank" href="/match/{{$m->mid}}" role="button">See</a></th>
				</tr>
			@endforeach
			</tbody>
		</table>