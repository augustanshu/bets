@foreach($odds as $odd)
<li class="list-group-item">{{$odd->sheng}}/{{$odd->ping}}/{{$odd->fu}}----{{$odd->updatetime}}</li>
@endforeach