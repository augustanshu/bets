@extends('layouts.master')
@section('title','MyBets')

@section('main')
<form id="fm-odd" method="post" action="/test/ajax" style="display:flex;flex-direction:row;justify-content:center">
{!!csrf_field()!!}
<h5>W</h5><input type="text" class="odd-input" name="w1"><h5>-</h5><input class="odd-input" name="w2">
<h5>D</h5><input type="text" class="odd-input" name="d1"><h5>-</h5><input class="odd-input" name="d2">
<h5>L</h5><input type="text" class="odd-input" name="l1"><h5>-</h5><input class="odd-input" name="l2">
<button class="btn btn-sm btn-danger btn-search" type="submit">check</button>
</form>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>league</th>
                <th>season</th>
                <th>team1</th>
				<th>team2</th>
				<th>fi_point1</th>
				<th>fi_point2</th>
				<th>fi_expect1</th>
				<th>fi_expect2</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>league</th>
                <th>season</th>
                <th>team1</th>
				<th>team2</th>
				<th>fi_point1</th>
				<th>fi_point2</th>
				<th>fi_expect1</th>
				<th>fi_expect2</th>
            </tr>
        </tfoot>
    </table>
<script>
(function($){
	$('#example').DataTable({
	    "processing": true,
        //"serverSide": true,
		"ajax":
		{
			"url":"/test/ajax",
			"type":"GET"
		},
		"columns":[
       {"data":"league"},
		{"data":"round"},
		{"data":"time"},
		{"data":"team1"},
		{"data":"team2"},
        {"data":"score"},
		{"data":"league"},
		{"data":"round"},
		{"data":"time"},
		{"data":"team1"},
		{"data":"team2"},
		],
		"userLength": 50
	});
	
	$('#fm-odd').submit(function(e){
	 var url = $(this).attr('action');
	 var round=new FormData(this);
     var formData={'round':'2'};
	 $.ajax({
		 url:url,
		 type:'POST',
		 data:formData,
		  headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
		 processData:false,
		 beforeSend:function()
		 {
			 
		 },
		success:function(data, textStatus, jqXHR)
		{
		$('#example').DataTable().ajax.reload(null,true );
		//$('#entry-role').load('{{URL::to('admin/user/role')}}/0');
		},
		error: function(jqXHR, textStatus, errorThrown)
		{
		}
	 });
	   e.preventDefault();
	});
}(jQuery));
</script>

@endsection
<style>
h5{
	margin-right:5px;
	margin-left:5px;
}
.odd-input{
	width:60px;
}
input:nth-child(2n)
{
		margin-right:10px;
}
.btn-search{
	margin-left:10px;
}
</style>