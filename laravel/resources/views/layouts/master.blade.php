<html>
<head>
<title>@yield('title')</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="admin/css/dep.css">
<script src="admin/js/dep.js"></script>
</head>
<body>
@section('main')
@show
<div class="container">
@yield('content')
</div>
</body>
</html>