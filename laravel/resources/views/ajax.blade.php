@extends('layouts.master')

@section('title','MyBets')

@section('main')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div>

<input name="inputname"></input>
<button class="btn btn-success" id="btn-fresh">12313</button>

</div>
  	<script>
    $(window).load(function() {
      Pizza.init();
      $(document).foundation();
    });
  	</script>
<ul data-pie-id="my-cool-line-graph">
  <li data-x="36" data-y="1">Pepperoni</li>
  <li data-x="14" data-y="2">Sausage</li>
  <li data-x="8" data-y="3">Cheese</li>
  <li data-x="11" data-y="4">Mushrooms</li>
  <li data-x="7" data-y="5">Chicken</li>
  <li data-x="24" data-y="6">Other</li>
</ul>
<div id="my-cool-line-graph"></div> 
@endsection

@section('script')
<script>
(function($){
	 $("#btn-fresh").on('click',function(){
		 $mid=$('[name=inputname]').val();
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:'match/'+$mid,
			type:'post',
			processData:false,
			contentType:false,
			success:function(data,textStatus,jqXHR)
			{
				console.log(data[0][0]);
			}
		})
	 })
}(jQuery))
</script>
<script>
(function($){
	
})
</script>
@endsection
