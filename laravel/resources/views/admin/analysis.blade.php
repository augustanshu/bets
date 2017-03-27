@extends('layouts.master')
@section('main')
<div id="odd-header" >
{!!csrf_field()!!}
   League<input id="odd-content-league" name="league" value="英格兰超级">
   W<input id="odd-content-w" name="w" value="3">
   D<input id="odd-content-d" name="d">
   L<input id="odd-content-l" name="l">
   <button id="odd-content-search" class="btn btn-danger btn-sx">check</button>
</div>
<div id="odd-list">
</div>
   <div id="odd-content-table">
     <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Result</th>
				<th>Score</th>
				<th>W</th>
				<th>D</th>
				<th>L</th>
				<th>P</th>
				<th>Point</th>
				<th>Point2</th>
				<th>Fi_Point</th>
				<th>Fi_Point2</th>
				<th>Fi_Expect</th>
				<th>Fi_Expect2</th>
				<th>Fi_Percent</th>
				<th>Fi_Percent</th>
				<th>League</th>
                <th>Season</th>
                <th>Round</th>
                <th>Home</th>
                <th>Visit</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Result</th>
				<th>Score</th>
				<th>W</th>
				<th>D</th>
				<th>L</th>
				<th>P</th>
				<th>Point</th>
				<th>Point2</th>
				<th>Fi_Point</th>
				<th>Fi_Point2</th>
				<th>Fi_Expect</th>
				<th>Fi_Expect2</th>
				<th>Fi_Percent</th>
				<th>Fi_Percent</th>
				<th>League</th>
                <th>Season</th>
                <th>Round</th>
                <th>Home</th>
                <th>Visit</th>
            </tr>
        </tfoot>
    </table>
   </div>
<script>
(function($){
	
	   $('#example tfoot th').each( function () {
        var title = $('#example thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" style="width:60px" placeholder="'+title+'" />' );
    } );
	

	
	$('#odd-content-search').click(function(e){
      	var table=$('#example').DataTable({
		"autoWidth": false,
        "scrollY": 600,
        "scrollX": true,
		 "processing": true,
		 "destroy": true,
		 "ajax":
		{
			"data":{"league":$("input[name='league']").val(),"w":$("input[name='w']").val()},
			"headers": { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
			"url":"/admin/analysis",
			"type":"post"
		},
		"columns":[
			{"data":"result"},
			{"data":"score"},
			{"data":"sheng"},
			{"data":"ping"},
			{"data":"fu"},
			{"data":null,
			render:function(data,type,row){
				data=data['fi_expect']-data['fi_expect2'];
				return data.toFixed(2);
			}},
			{"data":"point"},
			{"data":"point2"},
			{"data":"fi_point"},
			{"data":"fi_point2"},
			{data:"fi_expect",
			 render: function(data, type, row, meta) {
                    return '<span title="' + data + '">' + data.substr(0, 4) + '</span>';                 
            }},
			{"data":"fi_expect2",
			render: function(data, type, row, meta) {
                    return '<span title="' + data + '">' + data.substr(0, 4) + '</span>';   
			}},
			{"data":"fi_percent"},
			{"data":"fi_percent2"},
			{"data":"league"},
			{"data":"season"},
			{"data":"round"},
			{"data":"team1"},
			{"data":"team2"},
		],
		"userLength": 50
	});
	  table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } )
    } );
			  $('#example tbody').on( 'click', 'tr', function (data) {
		 var rowdata = table.row($(this).closest('tr')).data();
		 var mid=rowdata['mid'];
		 $("#odd-list").load('/admin/odd/'+mid);
        $(this).toggleClass('selected');
    } );
	});
}(jQuery));
</script>
@endsection