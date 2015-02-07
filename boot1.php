<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Getting started with bootstrap</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body >

<header class="navbar-inverse" role="banner">
	<div class ="container">
		<nav class="navbar-default navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">Brand</a>
				</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Link</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
					<li class="divider"></li>
					<li><a href="#">One more separated link</a></li>
				  </ul>
				</li>
			  </ul>
		  
		 
			</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
	  	</nav>
	</div>
</header>

<div class="container">
	<div class="row"> 
		<div class="col-sm-6 col-xs-12" id="?">
				<div class="panel panel-primary">
				<div class="panel-heading">Panel heading without title</div>
				<div class="panel-body">
					<a href="#" class="btn btn-primary">Button</a>
					<a href="#" class="btn btn-danger">Button</a></div>
			</div>
		</div>
		<div class="col-sm-3 col-xs-6" id="?">
			<div class="panel panel-success">
				<div class="panel-heading">Panel heading without title</div>
				<div class="panel-body">
					<a href="#" class="btn btn-primary">Button</a>
					<a href="#" class="btn btn-danger">Button</a></div>
			</div>

		</div>
		<div class="col-sm-3 col-xs-6" id="?">
				<div class="panel panel-danger">
				<div class="panel-heading">Panel heading without title</div>
				<div class="panel-body">
					<a href="#" class="btn btn-primary">Button</a>
					<a href="#" class="btn btn-danger">Button</a></div>
			</div>
		
		</div>
	</div>
</div>




	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/bootstrap.js"></script> 
	
</body>
</html>
