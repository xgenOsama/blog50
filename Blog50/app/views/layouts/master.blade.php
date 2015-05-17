<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='utf-8'/>
	<meta http-equiv="X-UA-Compatible" content='IE-edge'/>
	<meta name="viewport" content="width=device-width, internal-scale=1"/>
	<title>Blog50</title>
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery-1.11.2.min.js')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('_css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('_css/bootstrap-theme.min.css')}}">
	<script type="text/javascript" src="{{URL::asset('_js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
</head>
<body>
  <header >
  <div class="head-style">
  	<div class="pull-right">
  		@yield('header-right')
  	</div>
  	<h1 style="margin-left:125px;"><a href="/">This is Blog50</a></h1>
  	<p  style="margin-left:125px;"class="load"> An example of dynamic app development with laravel</p>
  	</div>
  </header><!-- /header -->

  <div class="main">
  	<div class="container">
  		@yield('content')
  	</div>
  </div>
</body>
</html>