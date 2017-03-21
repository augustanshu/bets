<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<link rel="shortcut icon" href="/favicon.ico">
 <link href="/css/app.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/admin/css/dep.css">
<script src="/admin/js/dep.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
</head>

	<body>
	<div class="container" id="mainContent">
	 @include('layouts.nav')
	 @section('main')
	 @show
	</div>	
			<!--@yield('content')-->
	</body>
@yield('script')
@yield('css')
</html>
