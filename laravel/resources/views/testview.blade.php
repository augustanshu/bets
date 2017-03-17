@extends('layouts.master')
@section('main')
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
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
		],
		"userLength": 50
	});
}(jQuery));
</script>
@endsection
