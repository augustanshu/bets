
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>matchType</th>
					<th>round</th>
					<th>time</th>
					<th>status</th>
					<th>score</th>
					<th>team1</th>
					<th>team2</th>
					<th>william</th>
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
					<th>{{$m->score}}</th>
					<th>{{$m->team1}}</th>
					<th>{{$m->team2}}</th>
					<th>{{$m->sheng}}/{{$m->ping}}/{{$m->fu}}</th>
					<th><a class="btn btn-default" target="_blank" href="/match/{{$m->mid}}" role="button">See</a></th>
				</tr>
			@endforeach
			</tbody>
		</table>