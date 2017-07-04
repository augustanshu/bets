
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>赛事</th>
					<th>时间</th>
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
					<th>{{$m->league}}<span class="table-round">{{$m->round}}</span></th>
					<th>{{$m->time}}</th>
					<th>{{$m->team1}}</th>
					<th>{{$m->score}}</th>
					<th>{{$m->team2}}</th>
					<th>{{$m->sheng}}/{{$m->ping}}/{{$m->fu}}</th>
					<th><a class="odd-analysis" target="_blank" href="/match/{{$m->mid}}" role="button">See</a></th>
				</tr>
			@endforeach
			</tbody>
		</table>