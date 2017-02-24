<html>
<head>
<title>@yield('title')</title>
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" type="text/css" href="/admin/css/dep.css">
<script src="/admin/js/dep.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
</head>

	<body>
	<div class="container" id="mainContent">
	 @section('main')
	 @show
	</div>	
			<!--@yield('content')-->
	</body>
@yield('script')
@yield('css')
</html>
