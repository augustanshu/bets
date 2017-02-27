@extends('layouts.master')
@section('main')
 <div class="main-cache">
	 <meta name="csrf-token" content="{{ csrf_token() }}">

	 @foreach($cs as $c)
	 <li style="display:flex;flex:row;padding:5 0 0 0;justify-content:space-around" data-key="{{$c->key}}"><h5>{{$c->key}} </h5><button  class="del btn btn-danger btn-xs">删除</button></li>
	 @endforeach
	 <script>
 $('.del').on('click',function(){
	 var key=$(this).parent().attr("data-key");
	 var keys=key.split('laravel');
	 var key=keys[1];
	 swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function(){
				$.ajax({
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					url:'/admin/cache/'+key+'',
					type:'DELETE',
					processData:false,
					contentType:false,
					success:function(data)
					{
						swal("delete!","ok",'success');
						$('.main-cache').load('/admin/cache/part');
					}
					
				})
			});
 })
 </script>
</div>
@endsection
