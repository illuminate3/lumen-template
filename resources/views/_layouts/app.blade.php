<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="author" content="AUTHUR" />
	<meta name="keywords" content="KEYWORDS" />
	<meta name="description" content="DESCRIPTION" />

	<title>
		TITLE
	</title>

	<link rel="shortcut icon" href="{{ url('ico/favicon.png') }}">
	<link rel="icon" href="{{ url('favicon.ico') }}">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ url('ico/apple-touch-icon-57-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('ico/apple-touch-icon-72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('ico/apple-touch-icon-144-precomposed.png') }}">

<!-- ------------------------------------------ Google Fonts ------------------------------------------ -->
<!--
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
-->

<!-- ------------------------------------------ CSS stylesheets ------------------------------------------ -->

	<link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/font-awesome-4.6.3/css/font-awesome.css') }}">

<!--
	<link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css') }}">
-->

	<link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/illuminate3/css/standard.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/app.css') }}">

<!-- ------------------------------------------ app loaded CSS stylesheets ------------------------------------------ -->
	@yield('styles')

<!-- ------------------------------------------ head loaded js ------------------------------------------ -->

</head>

<body class="Site">


<header class="Site-header">
	@include('_partials.header')
</header>

<main class="Site-main">
	@include('_partials.content')
</main>

<footer class="Site-footer">
	@include('_partials.footer')
</footer>


<!-- ------------------------------------------ js ------------------------------------------ -->

	<script type="text/javascript" src="{{ url('assets/vendors/jquery/jquery-3.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/vendors/jquery/jquery-3.1.0.min.map') }}"></script>
	<script type="text/javascript" src="{{ url('assets/vendors/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>

<!--
	<script type="text/javascript" src="{{ url('assets/js/app.js') }}"></script>
-->


<!-- ------------------------------------------ app loaded js ------------------------------------------ -->
	@yield('scripts')

<!-- ------------------------------------------ template loaded js ------------------------------------------ -->
	<script type="text/javascript">
		@yield('inline-scripts')
	</script>

<!-- ------------------------------------------ google ananlytics js ------------------------------------------ -->
<script>
</script>
<!-- ------------------------------------------ google ananlytics js ------------------------------------------ -->

</body>
</html>
